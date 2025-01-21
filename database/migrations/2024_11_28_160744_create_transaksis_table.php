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
            $table->string('token_customer')->nullable();
            $table->string('nama_pelayan')->nullable();
            $table->string('nama_pembeli')->nullable();

            $table->string('alamat')->nullable();
            $table->string('no_telepon')->nullable();
            $table->foreignId('produks_id')->constrained()->onDelete('cascade');
            $table->string('quantity')->nullable();
            $table->string('total_harga')->nullable();
            $table->enum('status', ['unpaid', 'paid'])->defaultValue('unpaid');;

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
