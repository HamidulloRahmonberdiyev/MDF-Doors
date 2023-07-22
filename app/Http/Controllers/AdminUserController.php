<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminUserController extends Controller
{
    public function index()
    {
        return view('backend.users.index')->with([
            'users' => User::paginate(10),
        ]);
    }

    public function create()
    {
        return view('backend.users.create')->with([
            'roles' => Role::paginate(10),
        ]);
    }

    public function store(StoreUserRequest $request)
    {
        User::create([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('users.index')->with('status', "Foydalanuvchi yaratildi!");
    }

    public function show(string $id)
    {
        //
    }

    public function edit(User $user)
    {
        return view('backend.users.edit')->with([
            'user' => $user,
            'roles' => Role::all(),
        ]);
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $user->update([
            'role_id' => $request->role_id,
            'name' => $request->name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        return redirect()->route('users.index')->with('status', "Foydalanuvchidagi o'zgartirishlar saqlandi!");
    }

    public function destroy(User $user)
    {
        $user->delete();

        return redirect()->route('users.index')->with('status', "Foydalanuvchi o'chirildi!"); 
    }
}
