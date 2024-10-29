<?php

namespace App\Http\Controllers;

use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Http\Request;

class UserManagementController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('roles.index', compact('roles'));
    }
    public function create()
    {
        // Group permissions by 'group' field
        $permissions = Permission::all()->groupBy('group');
        // dd($permissions);
        return view('roles.create', compact('permissions'));
    }
    

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|unique:roles',
            'permissions' => 'required',
        ]);
        // dd($request->permissions);
        $role = Role::create(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Role created successfully');
    }
    public function edit($id)
    {
        // Fetch the role and all permissions
        $role = Role::findOrFail($id);
        $permissions = Permission::all()->groupBy('group');
    
        // Get permissions the role already has
        $rolePermissions = $role->permissions->pluck('name')->toArray(); // Array of permission names
    
        return view('roles.edit', compact('role', 'permissions', 'rolePermissions'));
    }
    

    public function update(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        $request->validate([
            'name' => 'required|unique:roles,name,' . $role->id,
            'permissions' => 'required',
        ]);

        $role->update(['name' => $request->name]);
        $role->syncPermissions($request->permissions);

        return redirect()->route('roles.index')->with('success', 'Role updated successfully');
    }

    public function destroy($id)
    {
        $role = Role::findOrFail($id);
        $role->delete();
        return redirect()->route('roles.index')->with('success', 'Role deleted successfully');
    }

    public function clone($id)
    {
        $role = Role::findOrFail($id);
        $newRole = Role::create(['name' => $role->name . '-clone']);
        $newRole->syncPermissions($role->permissions);

        return redirect()->route('roles.index')->with('success', 'Role cloned successfully');
    }
}
