<!DOCTYPE html>
<html>

<head>
    <title>Data Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="container mt-4">

    <h2>Data Produk Skincare</h2>

    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">+ Tambah Produk</a>

    <table class="table table-bordered">

        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Gambar</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Kategori</th>
            <th>Deskripsi</th>
            <th>Tanggal Expired</th>
            <th>Aksi</th>
        </tr>

        @foreach($produks as $p)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $p->nama_produk }}</td>
            <td>
                @if($p->gambar_produk)
                <img src="{{ asset('images/' . $p->gambar_produk) }}"
                    style="width:150px; height:150px; object-fit:cover;"
                    class="img-thumbnail">
                @else
                <span class="text-danger">Tidak ada gambar</span>
                @endif
            </td>
            <td>{{ $p->harga }}</td>
            <td>{{ $p->stok }}</td>
            <td>{{ $p->kategori }}</td>
            <td>{{ $p->deskripsi }}</td>
            <td>{{ $p->tanggal_expired }}</td>
            <td>
                <div class="d-flex flex-column gap-2">
                <a href="{{ route('produk.edit', $p->id) }}" class="btn btn-warning btn-sm">Edit</a>

                <form action="{{ route('produk.destroy', $p->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Yakin mau hapus data ini?')">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                </form>
                </div>
            </td>
        </tr>
        @endforeach

    </table>

</body>

</html>
