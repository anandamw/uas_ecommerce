<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use App\Models\Format;
use App\Models\FormatKategori;

class KategoriController extends Controller
{
    public function index()
    {

        $data = [
            "kategori" => Kategori::get(),

            "formats" => Format::all(),
        ];
        return view('admin.kategori.index', $data);
    }
    public function store(Request $request)
    {
        $format_buku = $request->input('format_buku', []);
        $kategori = $request->nama_kategori;
        $fileBuku  = $request->file_buku;

        $data = [
            "nama_kategori" => $kategori,
            "file_buku" => $fileBuku
        ];

        Kategori::create($data)->formats()->sync($format_buku);


        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }

    public function update(Request $request, $id)
    {
        $format_buku = $request->input('format_buku', []);
        $kategori = $request->nama_kategori;
        $fileBuku  = $request->file_buku;

        $data = [
            "nama_kategori" => $kategori,
            "file_buku" => $fileBuku
        ];

        Kategori::where('id', $id)->update($data);
        Kategori::where('id', $id)->first()->formats()->sync($format_buku); //update pivot


        return redirect('/kategori')->with('success', 'Kategori berhasil ditambahkan.');
    }


    public function delete($id)
    {
        Kategori::where('id', $id)->delete();
        return redirect('/kategori');
    }
}
