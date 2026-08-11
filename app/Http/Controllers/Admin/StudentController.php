<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function index()
    {
        //return "hallo saya sedang belajar laravel";
        // $students = Student::paginate(5);
        $students = Student::all();
        $tittle = "Student Table";
        return view('admin.student', compact('tittle', 'students'));
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);

        Student::create($request->all());
        return redirect()->route('student')->with('success', 'Student Created successfully');
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
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'address' => 'required',
        ]);
        $student = Student::find($id);
        $student->update($request->all());
        
        return redirect()->route('student')->with('success', 'Student updated successfully');
    }

    public function hapus($id)
    {
        $student = Student::FindOrFail($id);
        $student->delete();
        return redirect()->route('student')->with('success', 'Student deleted successfully');
    }
}