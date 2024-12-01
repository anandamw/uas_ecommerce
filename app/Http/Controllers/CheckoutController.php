<?php

namespace App\Http\Controllers;


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
}
