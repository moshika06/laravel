<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\user;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //
    public function index()
    {
        //return "hallo saya sedang belajar laravel";
        // $users = User::paginate(5);
        $users = User::with('role')->get();
        $tittle = "User Table";
        return view('admin.user.index', compact('tittle', 'users'));
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'role' => 'required',
        ]);

        User::create($request->all());
        return redirect()->route('user')->with('success', 'User Created successfully');
    }


    public function create()
    {

    }

    public function store(Request $request)
    {
        //
    }

    public function show(string $id)
    {
        //
    }

    public function edit(string $id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $user->update(['id_role' => $request->role,]);

        return redirect()->route('user')->with('success', 'User updated successfully');
    }

    public function hapus($id)
    {
        $user = User::FindOrFail($id);
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User deleted successfully');
    }
}
