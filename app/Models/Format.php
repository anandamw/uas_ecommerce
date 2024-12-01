<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    use HasFactory;
    protected $table = "formats";
    protected $guarded = ['id'];

    public function kategoris()
    {
        return $this->belongsToMany(Kategori::class, 'format_kategori', 'kategoris_id', 'formats_id');
    }
}
