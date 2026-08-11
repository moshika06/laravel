<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class LoginController extends Controller
{

    public function login()
    {
        return view('admin.login');
    }

    public function actionLogin(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            //Authorization passed
            $request->session()->regenerate();
            $user = Auth::user();
            session(['user_id' => $user->id, 'user_name' => $user->name, 'role' => $user->role]);
            // $user->name, 'role' => $user->role->nama_role;
            return redirect()->intended('/admin/dashboard');
        }

        return redirect()->back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);


    }

    // public function Input(Request $request)
    // {
    //     Auth::Input();
    //     $request->session()->invalidate();
    //     $request->session()->regenerateToken();

    //     return redirect('/login');
    // }
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
