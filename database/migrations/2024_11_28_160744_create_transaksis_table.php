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
        Schema::create('transaksis', function (Blueprint $table) {
            $table->id();
            $table->string('token_customer');
            $table->string('nama_pembeli');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('no_telepon');
            $table->string('nama_buku');
            $table->string('quantity');
            $table->string('total_harga');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('transaksis');
    }
};
