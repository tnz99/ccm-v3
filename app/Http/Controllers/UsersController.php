<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

use App\Models\User;
use App\Models\Role;

class UsersController extends Controller
{
    public function index(Request $request) {
        $users = User::all();

        return view('users.index');
    }

    public function create(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $role->id
        ]);

        event(new Registered($user));

        return redirect()->back();
    }
}
