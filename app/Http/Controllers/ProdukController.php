<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $produks = Produk::all();
        return view('produk.index', compact('produks'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('produk.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->all();

        if ($request->hasFile('gambar_produk')) {
            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);

            $data['gambar_produk'] = $filename;
        }

        Produk::create($data);

        return redirect()->route('produk.index')->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $produk = Produk::findOrFail($id);
        return view('produk.edit', compact('produk'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $produk = Produk::findOrFail($id);
        $data = $request->all();

        if ($request->hasFile('gambar_produk')) {

            // hapus gambar lama (opsional tapi bagus)
            if ($produk->gambar_produk && file_exists(public_path('images/' . $produk->gambar_produk))) {
                unlink(public_path('images/' . $produk->gambar_produk));
            }

            $file = $request->file('gambar_produk');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path('images'), $filename);

            $data['gambar_produk'] = $filename;
        }

        $produk->update($data);

        return redirect()->route('produk.index')->with('success', 'Data berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $produk = Produk::findOrFail($id);
        $produk->delete();

        return redirect()->route('produk.index')->with('success', 'Data berhasil dihapus');
    }
}
