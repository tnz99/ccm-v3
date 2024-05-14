<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    public function index(Request $request) {
        $users = User::all();
        $roles = Role::all();

        return view('users.index')->with(['users' => $users, 'roles' => $roles]);
    }

    public function create(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);

        event(new Registered($user));

        return redirect()->back()->with(['success' => 'User Added Successfully']);
    }

    public function edit(Request $request) {

    }

    public function update(Request $request) {

    }

    public function delete(Request $request) {

    }

    public function search(Request $request) {

    }
}
