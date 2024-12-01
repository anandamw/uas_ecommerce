<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FormatKategori extends Model
{
    use HasFactory;
    protected $table = "format_kategori";
    protected $guarded = ['id'];
}
