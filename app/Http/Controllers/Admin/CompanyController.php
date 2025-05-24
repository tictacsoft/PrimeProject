<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['companies'] = Company::all();
        return view('admin.company.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'address' => 'required'
        ]);

        $store = Company::create([
            'type' => $request->type,
            'name' => $request->name,
            'address' => $request->address,
        ]);

        if ($store) {
            Session::flash('success', 'Company has saved');
        }else{
            Session::flash('error', 'Company create failed');
        }

        return redirect('/admin/company');
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
        $this->data['company'] = Company::find($id);
        return view('admin.company.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'type' => 'required',
            'name' => 'required',
            'address' => 'required'
        ]);

        $update = Company::find($id);
        $update->type = $request->type;
        $update->name = $request->name;
        $update->address = $request->address;

        if ($update->save()) {
            Session::flash('success', 'Company has updated');
        }else{
            Session::flash('error', 'Company edit failed');
        }

        return redirect('/admin/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
         $delete = Company::find($id);
         if ($delete->delete()) {
            Session::flash('success', 'Company has deleted');
        }else{
            Session::flash('error', 'Company delete failed');
        }

        return redirect('/admin/company');
    }
}
