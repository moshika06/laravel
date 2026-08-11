<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar laravel</title>
</head>
<br>
    <h1>{{$tittle ?? '' }}</h1>
    <h1></h1>
    <a href="{{route('penjumlahan')}}">tambah</a>
    <a href="{{route('pengurangan') }}">kurang</a>
    <a href="{{route('pembagian') }}">bagi</a>
    <a href="{{route('perkalian') }}">kali</a>

<br></br>

    <div class="content">
        @yield('content')
    </div>
</body>
</html>
