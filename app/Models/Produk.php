<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Produk extends Model
{
    use HasFactory;
    protected $table = "produks";
    protected $guarded = ["id"];

    public static function notification()
    {
        return Produk::where("stok", "<", 10)->get();
    }
}
