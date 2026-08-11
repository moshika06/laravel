@extends('belajar')
@section('content')

<form action="{{route('store-tambah')}}" method="post">
        @csrf
        <div class="mb-3">
            <lebel for="">angka 1</lebel>
            <input type="number" placeholder="masukan angka" name="angka1">
        </div>
        <br>
        <div class="mb-3">
            <lebel for="">angka 2</lebel>
            <input type="number" placeholder="masukan angka" name="angka2">
            </div>
            <br>
            <button type="submit" >simpan</button>
            <a href="/belajar-laravel">kembali</a>
    </form>
<h3> Hasilnya adalah : {{ $jumlah }}</h3>
@endsection
