<?php

namespace Database\Seeders;

use App\Models\Produk;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProdukSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'token_produks' => Str::uuid(),
                'judul_buku' => 'Pemrograman Laravel Dasar',
                'penerbit' => 'Penerbit Teknologi',
                'penulis' => 'Nanda Teknologi',
                'halaman' => 250,
                'bahasa' => 'Indonesia',
                'harga' => 120000,
                'stok' => 35,
                'foto_buku' => 'laravel_dasar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'token_produks' => Str::uuid(),
                'judul_buku' => 'Belajar Python untuk Data Science',
                'penerbit' => 'Data World',
                'penulis' => 'Adi Wijaya',
                'halaman' => 320,
                'bahasa' => 'Indonesia',
                'stok' => 12,
                'harga' => 150000,
                'foto_buku' => 'python_datascience.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'token_produks' => Str::uuid(),
                'judul_buku' => 'Mastering React',
                'penerbit' => 'CodePress',
                'penulis' => 'John Doe',
                'halaman' => 280,
                'bahasa' => 'English',
                'stok' => 45,
                'harga' => 200000,
                'foto_buku' => 'mastering_react.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];

        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}
