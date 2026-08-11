<?php

namespace App\Http\Controllers\Admin;
use App\Models\MataPelajaran;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MataPelajaranController extends Controller
{
    //
    public function index()
    {
        //return "hallo saya sedang belajar laravel";
        // $users = User::paginate(5);
        $mapels = MataPelajaran::all();
        $tittle = "Mata Pelajaran Table";
        return view('admin.mata_pelajaran.index', compact('tittle', 'mapels'));
    }
    public function simpan(Request $request)
    {
        $request->validate([
            'nama_pelajaran' => 'required',
        ]);

        MataPelajaran::create($request->all());
        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran Created successfully');
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
            'nama_pelajaran' => 'required',
        ]);
        $mapels = MataPelajaran::find($id);
        $mapels->update($request->all());

        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran updated successfully');
    }

    public function hapus($id)
    {
        $mapels = MataPelajaran::FindOrFail($id);
        $mapels->delete();
        return redirect()->route('mata_pelajaran.index')->with('success', 'Mata Pelajaran deleted successfully');
    }
}
