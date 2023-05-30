<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function register (Request $request) {
        // validar los datos (opcional)
        $user = new User();
        $user->name=$request->name;
        $user->email=$request->email;
        $user->password=Hash::make($request->password);

        $user->save();
        
        Auth::login($user);

        return redirect(route('private'));

    }

    public function login(Request $request) {
        // validar los datos (opcional)
        $credentials = [
            "email"=>$request->email,
            "password"=>$request->password
        ];

        $remember = ($request->has('remember') ? true : false);

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->intended(route('private'));
        } else {
            return redirect('login');
        }

    }


    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect(route('login'));
    }

}
