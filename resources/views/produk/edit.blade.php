<!DOCTYPE html>
<html>

<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2>Edit Produk</h2>

    <form action="{{ route('produk.update', $produk->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        <input type="text" name="nama_produk" value="{{ $produk->nama_produk }}" class="form-control mb-2">
        <input type="number" name="harga" value="{{ $produk->harga }}" class="form-control mb-2">
        <input type="number" name="stok" value="{{ $produk->stok }}" class="form-control mb-2">
        <input type="text" name="kategori" value="{{ $produk->kategori }}" class="form-control mb-2">
        <textarea name="deskripsi" class="form-control mb-2">{{ $produk->deskripsi }}</textarea>
        <label>Tambah Gambar Produk</label>
        <input type="file" name="gambar_produk" class="form-control mb-2">
        @if($produk->gambar_produk)
        <img src="{{ asset('images/' . $produk->gambar_produk) }}" width="150" class="mb-2">
        @endif

        <input type="date" name="tanggal_expired" value="{{ $produk->tanggal_expired }}" class="form-control mb-2">
        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-success">Update</button>
        </div>

    </form>

</body>

</html>