<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AuditLead;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuditLeadAdminController extends Controller
{
     public function index(Request $request)
    {
        $q = AuditLead::query()->latest();

        if ($request->filled('status')) {
            $q->where('status', $request->string('status'));
        }

        if ($request->filled('audit_type')) {
            $q->where('audit_type', $request->string('audit_type'));
        }

        if ($request->filled('search')) {
            $s = $request->string('search');
            $q->where(function ($qq) use ($s) {
                $qq->where('name', 'like', "%{$s}%")
                   ->orWhere('email', 'like', "%{$s}%")
                   ->orWhere('phone', 'like', "%{$s}%");
            });
        }

        $items = $q->paginate(20)->withQueryString();

        return view('admin.audit-leads.index', [
            'items' => $items,
            'statuses' => AuditLead::STATUSES,
        ]);
    }

    public function show(AuditLead $auditLead)
    {
        $users = class_exists(User::class) ? User::query()->select('id','name','email')->orderBy('name')->get() : collect();

        return view('admin.audit-leads.show', [
            'lead' => $auditLead,
            'statuses' => AuditLead::STATUSES,
            'users' => $users,
        ]);
    }

    public function update(Request $request, AuditLead $auditLead)
    {
        $data = $request->validate([
            'status' => ['required', Rule::in(AuditLead::STATUSES)],
            'assigned_to' => ['nullable','integer','exists:users,id'],
            'contacted_at' => ['nullable','date'],
            'admin_notes' => ['nullable','string','max:5000'],
        ]);

        $auditLead->update($data);

        return back()->with('success', 'Audit lead updated.');
    }
}
