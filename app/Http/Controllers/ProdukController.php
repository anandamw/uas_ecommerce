<?php

namespace App\Http\Controllers;

use App\Models\Keranjang;
use App\Models\Produk;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = [
            'produks' => Produk::all(),
            'carts' => Keranjang::JoinKeranjang(),
        ];

        return view('admin.produk.index', $data);
    }

    public function store(Request $request)
    {
        // Validasi data yang diterima
        $request->validate([
            'supliyers' => 'required|string|max:255',
            'judul_buku' => 'required|string|max:255',
            'penerbit' => 'required|string|max:255',
            'penulis' => 'required|string|max:255',
            'halaman' => 'required|integer',
            'bahasa' => 'required|string|max:100',
            'stok' => 'required|string|max:100',
            'harga' => 'required|numeric',
            'harga_beli' => 'required|numeric',
        ]);
        // dd($request->all());
        $token = strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999);


        // Menyimpan data produk ke database
        Produk::create([
            'token_produks' => $token,
            'supliyers' => $request->supliyers,
            'judul_buku' => $request->judul_buku,
            'penerbit' => $request->penerbit,
            'penulis' => $request->penulis,
            'halaman' => $request->halaman,
            'bahasa' => $request->bahasa,
            'stok' => $request->stok,
            'harga' => $request->harga,
            'harga_beli' => $request->harga_beli,
        ]);


        // Redirect kembali dengan pesan sukses
        return redirect('/kasir');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        $token = strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999);


        // Update data produk lainnya tanpa mengganti foto (hanya jika foto tidak diubah)
        $produk->token_produks = $token;
        $produk->judul_buku = $request->judul_buku;
        $produk->penerbit = $request->penerbit;
        $produk->penulis = $request->penulis;
        $produk->halaman = $request->halaman;
        $produk->bahasa = $request->bahasa;
        $produk->supliyers = $request->supliyers;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;
        $produk->harga_beli = $request->harga_beli;


        // Simpan perubahan ke database
        $produk->save();

        // Redirect kembali dengan pesan sukses
        return redirect('/kasir');
    }

    public function delete($id)
    {
        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);  // Jika produk tidak ditemukan, akan memunculkan 404

        // Hapus data produk dari database
        $produk->delete();
        toast('Berhasil Hapus Data !!', 'success');

        // Redirect dengan pesan sukses
        return redirect('/kasir');
    }

    public function detail()
    {

        $data = [
            'produks' => Produk::all(),
            // 'carts' => Keranjang::JoinKeranjang(),
        ];

        return view('admin.produk.detail', $data);
    }

    public function notif()
    {
        $produks = Produk::notification();


        return view('admin.produk.notif', compact('produks'));
    }
}
