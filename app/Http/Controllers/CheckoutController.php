<?php

namespace App\Http\Controllers;


use App\Models\Keranjang;
use App\Models\Transaksi;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;

class CheckoutController extends Controller
{
    public function __construct()
    {
        \Midtrans\Config::$serverKey = config('midtrans.serverKey');
        \Midtrans\Config::$isProduction = false;
        \Midtrans\Config::$isSanitized = true;
        \Midtrans\Config::$is3ds = true;
    }



    public function checkout(Request $request)
    {
        // $request->validate([
        //     'nama_pembeli' => 'required|string|max:255',
        //     'alamat' => 'required|string|max:500',

        //     'no_telepon' => 'required|numeric|digits_between:10,15',
        // ]);

        $datas = Keranjang::where('users_id', auth()->id())
            ->select('total_harga', 'quantity', 'produks_id', 'users_id')
            ->get();

        // Generate a single token for the transaction
        $tokenCustomer = Str::random(10);

        DB::transaction(function () use ($datas, $request, $tokenCustomer) {
            foreach ($datas as $item) {
                Transaksi::create([
                    'token_customer' => $tokenCustomer,
                    'nama_pelayan' => auth()->user()->name, // Use the same token for all items
                    'total_harga' => $item->total_harga,
                    'quantity' => $item->quantity,
                    'produks_id' => $item->produks_id,
                    'nama_pembeli' => $request->input('nama_pembeli'),
                    'alamat' => $request->input('alamat'),

                    'no_telepon' => $request->input('no_telepon'),
                ]);
            }

            // Clear the cart for the current user after processing
            // Keranjang::where('users_id', auth()->id())->delete();
        });

        return redirect('/checkout-detail?token=' . $tokenCustomer)->with('success', 'Checkout berhasil!');
    }

    public function details()
    {

        $token = $_GET['token'];

        $datas = Transaksi::join('produks', 'transaksis.produks_id', '=', 'produks.id')->where('token_customer', $token)->get();

        return view('admin.details', compact('datas'));
    }

    public function final()
    {

        $data = $_GET['token'];

        $dataUp = [
            'status' => 'paid'
        ];

        Transaksi::where('token_customer', $data)->update($dataUp);

        Keranjang::where('users_id', auth()->id())->delete();

        toast('Transaksi Berhasil !!', 'success');

        if (auth()->user()->role == 'admin') {
            return redirect('/kasir');
        }
        return redirect('/karyawan/kasir');
    }
}
