<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;
use Illuminate\Support\Facades\Hash;
use Illuminate\Auth\Events\Registered;

use App\Models\User;
use App\Models\Role;

class AdminController extends Controller
{
    public function index(Request $request) {
        $roleIds = Role::where('name', '!=', 'donar')->pluck('id');
        $users = User::whereIn('role_id', $roleIds)->get();

        $roles = Role::all();

        return view('admins.index')->with(['users' => $users, 'roles' => $roles]);
    }

    public function search(Request $request) {
        $query = $request->search_string;
        $users = User::where('name', 'LIKE', "%$query%")->orWhere('email', 'LIKE', "%$query%")->get();
        $roles = Role::all();

        return view('admins.index')->with(['users' => $users, 'roles' => $roles]);
    }

    public function create(Request $request) {
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => $request->role_id
        ]);

        event(new Registered($user));

        return redirect()->route('admins.index')->with('success', 'User Added Successfully');
    }

    public function profile(Request $request) {
        return view('admins.profile',  [
            'user' => $request->user(),
        ]);
    }

    public function edit(Request $request) {

    }

    public function update(Request $request) {

    }

    public function delete(Request $request) {
        $user = User::find($request->id);
        $user->delete;

        return redirect()->back()->with('success', 'User Deleted Successfully');
    }
}
