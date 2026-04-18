<!DOCTYPE html>
<html>

<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2>Tambah Produk Skincare</h2>

    <form action="{{ route('produk.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <label>Nama Produk</label>
        <input type="text" name="nama_produk" class="form-control mb-2">

        <label>Harga</label>
        <input type="number" name="harga" class="form-control mb-2">

        <label>Stok</label>
        <input type="number" name="stok" class="form-control mb-2">

        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control mb-2">

        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control mb-2"></textarea>

        <label>Tanggal Expired</label>
        <input type="date" name="tanggal_expired" class="form-control mb-2">

        <label>Gambar Produk</label>
        <input type="file" name="gambar_produk" class="form-control mb-2">


        <div class="d-flex gap-2 mt-3">
            <a href="{{ route('produk.index') }}" class="btn btn-secondary">← Kembali</a>
            <button type="submit" class="btn btn-primary">
                Simpan
            </button>
        </div>
    </form>


</body>

</html>