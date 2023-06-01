<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index() {
        $users=User::all();
        return view('user.index', compact('users'));
    }

    public function create() {
        return view('user.create');
    }

    public function store (Request $request) {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->role = $request->role;
        
        $user->save();

        return redirect()->route('user.index');
    }

    public function edit (User $user) {
        return view('user.edit', compact('user'));
    }

    public function update (Request $request, User $user) {
        $user->update($request->all());
        return redirect()->route('user.index');
    }

    // public function show (User $user) {
    //     return view('user.show', compact('user'));
    // }

    public function destroy (User $user) {
        $user->delete();
        return redirect()->route('user.index');
    }

}
