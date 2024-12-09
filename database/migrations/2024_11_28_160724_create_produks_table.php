<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('produks', function (Blueprint $table) {
            $table->id();
            $table->string('token_produks');
            $table->string('judul_buku');
            $table->string('penerbit');
            $table->string('penulis');
            $table->string('halaman');
            $table->string('bahasa');
            $table->string('stok');
            $table->string('harga');
            $table->string('foto_buku');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('produks');
    }
};
