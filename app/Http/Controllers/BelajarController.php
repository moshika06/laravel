<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BelajarController extends Controller
{
    public function index()
    {
        // return "hallo saya sedang belajar laravel";
        $tittle = "belajara matematika dasar";
        return view('belajar', compact('tittle'));
    }
    public function tambah()
    {
        $jumlah = 0;
        $tittle = "penjumlahan";
        return view('tambah', compact('jumlah', 'tittle'));
    }

    // public function tambah()
    // {
    //     return view('tambah');
    // }

    public function storeTambah(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->input('angka2');


        $jumlah = $angka1 + $angka2;


        return view('tambah', compact('jumlah'));
    }

    public function kurang()
    {
        $jumlah = 0;
        $tittle = "pengurangan";
        return view('kurang', compact('jumlah', 'tittle'));
    }


    public function storeKurang(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;


        // $jumlah = $angka1 - $angka2;
        $jumlah = max(0, $angka1 - $angka2);
        return view('kurang', compact('jumlah'));
    }

    public function bagi()
    {
        $jumlah = 0;
        $tittle = "pembagian";
        return view('bagi', compact('jumlah', 'tittle'));
    }


    public function storeBagi(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;


        // $jumlah = $angka1 - $angka2;
        $jumlah = max(0, $angka1 / $angka2);
        return view('bagi', compact('jumlah'));
    }

    public function kali()
    {
        $jumlah = 0;
        $tittle = "perkalian";
        return view('kali', compact('jumlah', 'tittle'));
    }


    public function storeKali(Request $request)
    {
        $angka1 = $request->angka1;
        $angka2 = $request->angka2;


        // $jumlah = $angka1 - $angka2;
        $jumlah = max(0, $angka1 * $angka2);
        return view('kali', compact('jumlah'));
    }
}
