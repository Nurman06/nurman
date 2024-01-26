<h2>Daftar Kategori</h2>

<a href="{{ route('kategori.create') }}"><button>Tambah Kategori</button></a>

<table border="1" cellspacing="0" width="100%">

    <tr>
        <th>ID</th>
        <th>Nama Kategori</th>
        <th>Keterangan</th>
        <th>Edit</th>
        <th>Detail</th>
        <th>Hapus</th>
    </tr>

    @foreach($kategori as $data)

    <tr>
        <td>{{$data->id}}</td>
        <td>{{$data->nama_kategori}}</td>
        <td>{{$data->deskripsi}}</td>
        <td><a href="{{ route('kategori.edit', $data->id) }}"><button type="submit">Edit</button></a></td>
        <td><a href="{{ route('kategori.show', $data->id) }}"><button type="submit">Detail</button></a></td>
        <td>
            <form action="{{ route('kategori.destroy', $data->id) }}" method="post">
                @csrf @method('delete')
                <button type="submit">HAPUS</button>
            </form>
        </td>
    </tr>

    @endforeach
</table>