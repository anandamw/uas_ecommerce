<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    protected $table = "kategoris";
    protected $guarded = ["id"];

    public function formats()
    {
        return $this->belongsToMany(Format::class, 'format_kategori', 'kategoris_id', 'formats_id');
    }
  
}
