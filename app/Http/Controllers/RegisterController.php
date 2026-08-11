<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RegisterController extends Controller
{
    public function register()
    {
        return view('admin.register');
    }
    public function actionRegister(Request $request)
    {
        $request->validate([
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6',
        ]);
        $emailExists = User::where('email', $request->input('email'))->exists();
        if ($emailExists) {
            return redirect()->back()->withErrors(['email' => 'Email already exists']);
        } else {
           $user = new User();
           $user->name = $request->input('fname') . ' ' . $request->input('lname');
           $user->email = $request->input('email');
           $user->password = bcrypt($request->input('password'));
           $user->role = 'user'; // Set the role to 'user'
           $user->save();
           return redirect()->route('login')->with('success', 'Registration successful. Please login.');
        }
    }
}

abstract class Controller
{
    
}
