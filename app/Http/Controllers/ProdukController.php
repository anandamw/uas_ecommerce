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
            'foto_buku' => 'required|image|mimes:jpeg,png,jpg|max:2048',  // Validasi untuk foto
        ]);
        // dd($request->all());
        // Menangani file foto buku
        $file = $request->file('foto_buku');

        // Membuat token untuk nama file
        $token = Str::random(10);

        // Membuat nama file baru dengan ekstensi yang sesuai
        $filePath = $token . '__foto_buku.' . $file->getClientOriginalExtension();

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
            'foto_buku' => $filePath,  // Menyimpan nama file yang baru
        ]);

        // Pindahkan file foto ke folder publik
        $file->move(public_path('foto_buku'), $filePath);

        // Redirect kembali dengan pesan sukses
        return redirect('/produk');
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());

        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);

        // Menangani file foto buku (jika ada)
        if ($request->hasFile('foto_buku')) {
            $file = $request->file('foto_buku');

            // Membuat token untuk nama file
            $token = Str::random(10);

            // Membuat nama file baru dengan ekstensi yang sesuai
            $filePath = $token . '__foto_buku.' . $file->getClientOriginalExtension();

            // Pindahkan file foto ke folder publik
            $file->move(public_path('foto_buku'), $filePath);

            // Update foto buku dengan foto baru
            $produk->foto_buku = $filePath;
        } else {
            // Jika tidak ada file foto baru, cek apakah foto lama ada
            if (! $produk->foto_buku) {
                // Jika foto lama tidak ada, maka tentukan foto default atau kosongkan
                $produk->foto_buku = 'default_foto_buku.jpg'; // Gunakan foto default atau kosongkan sesuai kebutuhan
            }
        }

        // Update data produk lainnya tanpa mengganti foto (hanya jika foto tidak diubah)
        $produk->judul_buku = $request->judul_buku;
        $produk->penerbit = $request->penerbit;
        $produk->penulis = $request->penulis;
        $produk->halaman = $request->halaman;
        $produk->bahasa = $request->bahasa;
        $produk->supliyers = $request->supliyers;
        $produk->stok = $request->stok;
        $produk->harga = $request->harga;

        // Simpan perubahan ke database
        $produk->save();

        // Redirect kembali dengan pesan sukses
        return redirect('/produk');
    }

    public function delete($id)
    {
        // Cari produk berdasarkan ID
        $produk = Produk::findOrFail($id);  // Jika produk tidak ditemukan, akan memunculkan 404

        // Cek apakah ada foto yang terkait dengan produk ini
        if ($produk->foto_buku && $produk->foto_buku != 'default_foto_buku.jpg') {
            // Menghapus file foto buku dari server
            $filePath = public_path('foto_buku/' . $produk->foto_buku);
            if (file_exists($filePath)) {
                unlink($filePath);  // Hapus file foto
            }
        }

        // Hapus data produk dari database
        $produk->delete();
        toast('Berhasil Hapus Data !!', 'success');

        // Redirect dengan pesan sukses
        return redirect('/produk');
    }
}
