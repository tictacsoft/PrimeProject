<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class ProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['projects'] = Project::where('client_id', '=', Auth::user()->id)->get();
        return view('frontend.projects.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('frontend.projects.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd(Auth::user()->company_id);
        $request->validate([
            'project_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'description' => 'required',
        ]);

        $store = Project::create([
            'name' => $request->project_name,
            'description' => $request->description,
            'status' => 'pending',
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
            'client_id' => Auth::user()->id,
            'company_id' => Auth::user()->company_id,
        ]);

        if ($store) {
            Session::flash('success', 'Project create success');
        }else{
            Session::flash('error', 'Project create failed');
        }

        return redirect('/projects');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
