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
        ];


        Keranjang::create($data);


        return redirect('/produk');
    }


    public function delete($token)
    {
        Keranjang::where('token_keranjang', $token)->delete();
        return redirect('/produk');
    }
}
