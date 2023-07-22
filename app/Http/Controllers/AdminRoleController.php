<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreRoleRequest;
use App\Models\Role;
use Illuminate\Http\Request;

class AdminRoleController extends Controller
{
    public function index()
    {
        return view('backend.roles.index')->with([
            'roles' => Role::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.roles.create');
    }

    public function store(StoreRoleRequest $request)
    {
        Role::create([
            'name' => $request->name,
        ]);

        return redirect()->route('roles.index')->with('status', "Rol yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(Role $role)
    {
        return view('backend.roles.edit')->with([
            'role' => $role,
        ]);
    }

    public function update(StoreRoleRequest $request, Role $role)
    {
        $role->update([
            'name' => $request->name,
        ]);

        return redirect()->route('roles.index')->with('status', "Roldagi o'zgarishlar saqlandi!");
    }

    public function destroy(Role $role)
    {
        $role->delete();

        return redirect()->route('roles.index')->with('status', "Rol o'chirildi!");
    }
}
