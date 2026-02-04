<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Consultation;
use App\Models\ConsultationRemark;
use Illuminate\Http\Request;

class ConsultationAdminController extends Controller
{
     public function index(Request $request)
  {
    $status = $request->get('status');

    $items = Consultation::query()
      ->when($status, fn($q) => $q->where('status', $status))
      ->latest()
      ->paginate(20)
      ->withQueryString();

    return view('admin.consultations.index', compact('items', 'status'));
  }

  public function show(Consultation $consultation)
  {
    $consultation->load('remarks');
    return view('admin.consultations.show', compact('consultation'));
  }

  public function updateStatus(Request $request, Consultation $consultation)
  {
    $data = $request->validate([
      'status' => ['required','in:new,in_review,scheduled,completed,closed,spam'],
    ]);

    $consultation->status = $data['status'];
    $consultation->handled_at = now();
    $consultation->handled_by = auth()->id();
    $consultation->save();

    return back()->with('success', 'Status updated.');
  }

  public function addRemark(Request $request, Consultation $consultation)
  {
    $data = $request->validate([
      'remark' => ['required','string','max:5000'],
    ]);

    ConsultationRemark::create([
      'consultation_id' => $consultation->id,
      'remark' => $data['remark'],
      'created_by' => auth()->id(),
    ]);

    // mark as in_review automatically (optional)
    if ($consultation->status === 'new') {
      $consultation->update([
        'status' => 'in_review',
        'handled_at' => now(),
        'handled_by' => auth()->id(),
      ]);
    }

    return back()->with('success', 'Remark added.');
  }
}
