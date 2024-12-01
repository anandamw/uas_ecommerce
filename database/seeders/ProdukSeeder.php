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

                'kategoris_id' => 1,
                'token_produks' => Str::uuid(),
                'judul_buku' => 'Pemrograman Laravel Dasar',
                'penerbit' => 'Penerbit Teknologi',
                'penulis' => 'Nanda Teknologi',
                'halaman' => 250,
                'bahasa' => 'Indonesia',
                'deskripsi' => 'Buku ini membahas tentang dasar-dasar framework Laravel untuk pemula.',
                'harga' => 120000,
                'foto_buku' => 'laravel_dasar.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'kategoris_id' => 2,
                'token_produks' => Str::uuid(),
                'judul_buku' => 'Belajar Python untuk Data Science',
                'penerbit' => 'Data World',
                'penulis' => 'Adi Wijaya',
                'halaman' => 320,
                'bahasa' => 'Indonesia',
                'deskripsi' => 'Panduan lengkap untuk belajar Python dalam data science.',
                'harga' => 150000,
                'foto_buku' => 'python_datascience.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [

                'kategoris_id' => 3,
                'token_produks' => Str::uuid(),
                'judul_buku' => 'Mastering React',
                'penerbit' => 'CodePress',
                'penulis' => 'John Doe',
                'halaman' => 280,
                'bahasa' => 'English',
                'deskripsi' => 'A comprehensive guide to mastering React.js for front-end development.',
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
