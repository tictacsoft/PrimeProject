<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->data['roles'] = Role::all();
        $this->data['permissions'] = Permission::all();
        return view('admin.roles.index', $this->data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        $store = Role::create(['name' => $request->name]);

        if ($store) {
            Session::flash('success', 'Roles has saved');
        }else{
            Session::flash('error', 'Roles already have it');
        }

        return redirect('admin/roles');
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
        $role = Role::find($id);
        return view('admin.roles.edit', compact('role'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'name' => 'required|unique:roles,name'
        ]);

        $update = Role::find($id);
        $update->name = $request->name;

        if ($update->save()) {
            Session::flash('success', 'Roles has updated');
        }else{
            Session::flash('error', 'Roles updated failed');
        }

        return redirect('admin/roles');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $roles = Role::find($id);

        if ($roles->delete()) {
            Session::flash('success', 'Roles has deleted');
        }else{
            Session::flash('error', 'Roles deleted failed');
        }

        return redirect('/admin/roles');
    }

    public function updatePermissions(Request $request, Role $role)
    {
        $permissions = $request->get('permissions', []);

        $roles = $role->syncPermissions($permissions);

        if ($roles) {
            Session::flash('success', 'Permissions has updated');
        }else{
            Session::flash('error', 'Permissions updated failed');
        }

        return redirect('/admin/roles');
    }
}
