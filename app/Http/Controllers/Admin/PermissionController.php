<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Permission;

class PermissionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $permissions = Permission::where(function ($query) {
            $query->where('name', 'like', 'view_%')
                ->orWhere('name', 'like', 'add_%')
                ->orWhere('name', 'like', 'edit_%')
                ->orWhere('name', 'like', 'delete_%');
        })->get();

        $this->data['permissions'] = $permissions->map(function ($permission) {
            return preg_replace('/^(view_|add_|edit_|delete_)/', '', $permission->name);
        })->unique();
        return view('admin.permission.index', $this->data);
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
        $name = Str::slug($request->name);
        $data = [
            ['name' => 'view_' . $name],
            ['name' => 'add_' . $name],
            ['name' => 'edit_' . $name],
            ['name' => 'delete_' . $name],
        ];

        foreach ($data as $item) {
            Permission::create($item);
        }

        return redirect('/admin/permissions');
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
        $rawPermissions = Permission::where(function ($query) {
            $query->where('name', 'like', 'view_%')
                ->orWhere('name', 'like', 'add_%')
                ->orWhere('name', 'like', 'edit_%')
                ->orWhere('name', 'like', 'delete_%');
        })->pluck('name'); // ini akan jadi Collection of STRING

        $cleanPermissions = $rawPermissions->map(function ($name) {
            return preg_replace('/^(view_|add_|edit_|delete_)/', '', $name);
        })->unique();
        dd($cleanPermissions);
        return view('admin.permission.edit', $this->data);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $update = '';
        $permissions = Permission::where(function ($query) {
            $query->where('name', 'like', 'view_%')
                ->orWhere('name', 'like', 'add_%')
                ->orWhere('name', 'like', 'edit_%')
                ->orWhere('name', 'like', 'delete_%');
        })->get();

        foreach ($permissions as $permission) {
            // Hapus prefix
            $newName = preg_replace('/^(view_|add_|edit_|delete_)/', '', $request->name);

            // Update kolom name
            $permission->name = $newName;
            $update = $permission->save();
        }

        if ($update) {
            Session::flash('success', 'Permissions has updated');
        } else {
            Session::flash('error', 'Permissions updated failed');
        }

        return redirect('/admin/permissions');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
