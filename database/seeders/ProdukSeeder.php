<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [];

        for ($i = 0; $i < 20; $i++) {
            $data[] = [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),
                'judul_buku' => 'Judul Buku ' . ($i + 1),
                'penerbit' => 'Penerbit ' . ($i + 1),
                'penulis' => 'Penulis ' . ($i + 1),
                'halaman' => mt_rand(100, 500),
                'bahasa' => $i % 2 == 0 ? 'Indonesia' : 'English',
                'harga' => mt_rand(50000, 300000),
                'harga_beli' => mt_rand(50000, 300000),
                'stok' => mt_rand(10, 100),
                'supliyers' => 'Supliyer ' . ($i + 1),
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ];
        }

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}
