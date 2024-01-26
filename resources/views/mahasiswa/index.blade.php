@extends('component.layout')

@section("body")

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Daftar Tabel Mahasiswa</title>
  </head>
    <body>
      <main class="h-screen bg-gradient-to-b from-violet-900 to-fuchsia-500 flex flex-col justify-center items-center">
        <h1 class="text-3xl text-neutral-50 m-12 font-medium">Table Mahasiswa</h1>
        <table class="border-separate border border-neutral-200">
          <thead>
            <tr>
              <th class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">No</th>
              <th class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">NIM</th>
              <th class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">Nama</th>
              <th class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">Kelas</th>
              <th class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">Deskripsi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($mahasiswa as $item)
            <tr>
                <td class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">{{$item->id}}</td>
                <td class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">{{$item->nim}}</td>
                <td class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">{{$item->nama}}</td>
                <td class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">{{$item->kelas}}</td>
                <td class="border border-neutral-700 bg-neutral-200 text-neutral-900 p-2">{{$item->deskripsi}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </main>
    </body> 
  </html>
@endsection