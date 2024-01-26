@extends('component.layout')

@section("body")

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mahasiswa</title>
</head>
<body>
    
    <h2>Tambah Mahasiswa</h2>

    <form action="{{ route('mahasiswa.store') }}" method="post">
        @csrf

        <div>
            <label for="nim">NIM</label>
            <input type="text" name="nim" id="nim">
        </div>

        <div>
            <label for="nama">Nama</label>
            <input type="text" name="nama" id="nama">
        </div>

        <div>
            <label for="kelas">Kelas</label>
            <input type="text" name="kelas" id="kelas">
        </div>

        <label for="deskripsi">Deskripsi</label>
        <div>
            <textarea name="deskripsi" id="deskripsi" cols="30" rows="10"></textarea>
        </div>

        <input type="submit" value="Buat Mahasiswa">
    </form>

</body>
</html>

@endsection