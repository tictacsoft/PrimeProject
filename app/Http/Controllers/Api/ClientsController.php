<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\JobRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;

class ClientsController extends Controller
{
    public function index(){
        return view('frontend.dashboard.jobRequestClient');
    }

    public function store(Request $request)
{
    
    $request->merge([
        'interview_required' => $request->has('interview_required') ? true : false,
    ]);

    $validated = $request->validate([
        'project_title' => 'required|string|max:255',
        'project_description' => 'nullable|string',
        'client_company' => 'nullable|string|max:255',
        'project_location' => 'nullable|string',
        'project_start_date' => 'nullable|date',
        'project_end_date' => 'nullable|date|after_or_equal:project_start_date',
        'duration' => 'nullable|integer',
        'duration_unit' => 'nullable|string',
        'position_title' => 'nullable|string|max:255',
        'number_of_resources' => 'nullable|integer',
        'job_level' => 'nullable|string',
        'skill_required' => 'nullable|string',
        'job_description' => 'nullable|string',
        'nice_to_have_skills' => 'nullable|string',
        'work_type' => 'nullable|string',
        'work_location' => 'nullable|string',
        'rate_type' => 'nullable|string',
        'budget_range' => 'nullable|string',
        'contract_type' => 'nullable|string',
        'interview_required' => 'boolean',
        'interview_method' => 'nullable|string',
        'interview_slots' => 'nullable|date',
        'internal_notes' => 'nullable|string',
        'attachment' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048',
    ]);

    // Simpan user_id dari auth
    $validated['user_id'] = Auth::id();

    // Proses upload file jika ada
    if ($request->hasFile('attachment')) {
        $file = $request->file('attachment');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('uploads'), $filename);
        $validated['attachment'] = $filename;
    }

    // Simpan data ke database
    JobRequest::create($validated);

    return redirect()->route('dashboard')->with('success', 'Data berhasil disimpan.');
}
}


