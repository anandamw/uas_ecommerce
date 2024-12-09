<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Keranjang extends Model
{
    use HasFactory;
    protected $table = "keranjangs";
    protected $guarded = ["id"];


    public static function JoinKeranjang()
    {
        return DB::table('keranjangs')->join('produks', 'keranjangs.produks_id', '=', 'produks.id')->get();
    }
}
