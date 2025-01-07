<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDO;
use PhpParser\Node\Expr\FuncCall;

class AuthController extends Controller
{
    public function login(Request $request)
    {

        // dd($request->all());

        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);


        $cridentials = $request->only(['email', 'password']);


        if (auth()->attempt($cridentials)) {
            if (auth()->user()->role == 'admin') {
                return redirect('/dashboard');
            } elseif (auth()->user()->role == 'karyawan') {
                return redirect('/karyawan/kasir');
            }
        }
    }

    public function url()
    {
        if (auth()->user()->role == 'admin') {
            return redirect('/dashboard');
        } elseif (auth()->user()->role == 'karyawan') {
            return redirect('/karyawan/kasir');
        }
    }


    public function logout()
    {
        auth()->logout();
        return redirect('/');
    }
}
