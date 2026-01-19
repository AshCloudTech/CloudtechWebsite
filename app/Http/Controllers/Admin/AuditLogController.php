<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\View\View;
use Spatie\Activitylog\Models\Activity;

class AuditLogController extends Controller
{
    public function index(): View
    {
        return view('admin.audit-logs.index', [
            'activities' => Activity::query()
                ->with(['causer'])
                ->orderByDesc('id')
                ->paginate(50),
        ]);
    }
}
