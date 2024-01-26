<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    @extends('layout.app')
    @section('title', 'Halaman Latihan Layout : Home')

    @section('content')
    <p>ini adalah halaman home</p>
    <p>selamat datang!</p>
    @endsection

    @include('layout.component')

</body>
</html>