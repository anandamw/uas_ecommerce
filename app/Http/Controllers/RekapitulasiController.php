<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;

class RekapitulasiController extends Controller
{
    public function index()
    {

        // $datas = Transaksi::join('produks', 'transaksis.produks_id', '=', 'produks.id')->where('status', 'paid')->get();
        $datas = Transaksi::join('produks', 'transaksis.produks_id', '=', 'produks.id')->get();


        return view('admin.rekapitulasi', compact('datas'));
    }
}
