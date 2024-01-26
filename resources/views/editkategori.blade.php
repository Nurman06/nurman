<h2>Edit Kategori</h2>

<form action="{{ route('kategori.update', $kategori->id) }}" method="post">
    @csrf @method('put')

    <div>
        <label for="nama_kategori">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama_kategori" value="{{ $kategori->nama_kategori }}">
    </div>

    <label for="deskripsi">Deskripsi</label>
    <div>
        <textarea name="deskripsi" id="deskripsi" cols="30" rows="10">{{$kategori->deskripsi}}</textarea>
    </div>

    <input type="submit" value="Edit Kategori">
</form>

<a href="{{ route('kategori.index') }}">Kembali ke index Edit kategori</a>