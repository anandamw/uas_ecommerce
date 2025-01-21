<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use App\Models\Transaksi;
use App\Models\User;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalKeuntungan = Transaksi::where('status', 'paid')
            ->sum('total_harga');
        $totalCustomerSukses = Transaksi::where('status', 'paid')->count();
        $totalProduk = Produk::count();
        $totalUser = User::count();

        $users = User::all();

        return view('admin.dashboard', compact('users','totalKeuntungan', 'totalCustomerSukses', 'totalProduk', 'totalUser'));
    }
}
