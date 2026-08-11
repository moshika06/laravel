<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operator kurang</title>
</head>
<body>
    <h1>{{ $tittle ?? 'pengurangan' }}</h1>

    <form action="{{route('store-kurang')}}" method="post">
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

</body>
</html>
