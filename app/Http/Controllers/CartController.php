<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Keranjang;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Redirect;

class CartController extends Controller
{
    public function cart($token)
    {

        $produk = Produk::where('token_produks', $token)->first();

        $data = [
            "token_keranjang" => Str::random(9),
            "users_id" => auth()->user()->id,
            "produks_id" => $produk->id,
            "quantity" => '1',
            "total_harga" => $produk->harga
        ];


        Keranjang::create($data);


        if (auth()->user()->role == 'admin') {
            return redirect('/kasir');
        }
        return redirect('/karyawan/kasir');
    }


    public function update(Request $request, $token)
    {
        $keranjang = Keranjang::join('produks', 'keranjangs.produks_id', '=', 'produks.id')->where('token_keranjang', $token)->first();

        $total = $keranjang->harga * $request->quantity;

        $data = [
            "quantity" => $request->quantity,
            "total_harga" => $total,
        ];



        Keranjang::where('token_keranjang', $token)->update($data);

        if (auth()->user()->role == 'admin') {
            return redirect('/kasir');
        }
        return redirect('/karyawan/kasir');
    }

    public function delete($token)
    {
        Keranjang::where('token_keranjang', $token)->delete();
        if (auth()->user()->role == 'admin') {
            return redirect('/kasir');
        }
        return redirect('/karyawan/kasir');
    }
}
