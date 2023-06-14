<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Task;

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
        $user->password=Hash::make($request->password);
        $user->role = $request->role;
        
        $user->save();

        session()->flash('success', 'Usuario creado correctamente.');
        return redirect()->route('user.index');
    }

    public function edit (User $user) {
        return view('user.edit', compact('user'));
    }

    public function update (Request $request, User $user) {
        $user->update($request->all());
        session()->flash('success', 'Usuario actualizado correctamente.');
        return redirect()->route('user.index');
    }

    public function show (User $user) {
        return view('user.show', compact('user'));
    }

    public function destroy (User $user) {
        $tasks = Task::all()->where('user_id', $user->id);
        if (count($tasks)===0) {
            $user->delete();
            session()->flash('success', 'Usuario eliminado correctamente.');
            return redirect()->route('user.index');
        } else { 
            session()->flash('failure', 'No se puede eliminar este usuario, tiene tareas asignadas.');
            return redirect()->route('user.index');
        }
    }

}
