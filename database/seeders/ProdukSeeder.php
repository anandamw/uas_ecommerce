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
        $data = [
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),
                'supliyers' => 'Toko Buku Pintar',
                'judul_buku' => 'Bisnis Dari Nol',
                'penerbit' => 'Cerdas Press',
                'penulis' => 'Dimas Ardiansyah',
                'halaman' => 300,
                'bahasa' => 'Indonesia',
                'stok' => 250,
                'harga_beli' => 280000,
                'harga' => 350000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Gramedia Digital',
                'judul_buku' => 'Jelajah Wawasan Dunia',
                'penerbit' => 'Dunia Press',
                'penulis' => 'Tika Hartanto',
                'halaman' => 275,
                'bahasa' => 'Indonesia',
                'stok' => 180,
                'harga_beli' => 230000,
                'harga' => 300000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Perpustakaan Mega Ilmu',
                'judul_buku' => 'Teknologi Masa Depan',
                'penerbit' => 'Mega Publish',
                'penulis' => 'Joko Prasetyo',
                'halaman' => 340,
                'bahasa' => 'Indonesia',
                'stok' => 11,
                'harga_beli' => 320000,
                'harga' => 400000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Rumah Buku Nusantara',
                'judul_buku' => 'Strategi Bisnis Modern',
                'penerbit' => 'Modern Print',
                'penulis' => 'Rizki Ananda',
                'halaman' => 290,
                'bahasa' => 'Indonesia',
                'stok' => 12,
                'harga_beli' => 270000,
                'harga' => 350000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),
                'supliyers' => 'Pustaka Emas',
                'judul_buku' => 'Seni Mengelola Waktu',
                'penerbit' => 'Emas Print',
                'penulis' => 'Nia Wardhani',
                'halaman' => 200,
                'bahasa' => 'Indonesia',
                'stok' => 13,
                'harga_beli' => 200000,
                'harga' => 250000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),
                'supliyers' => 'Toko Buku Harmoni',
                'judul_buku' => 'Cerita Anak Nusantara',
                'penerbit' => 'Harmoni Press',
                'penulis' => 'Sari Widjaya',
                'halaman' => 220,
                'bahasa' => 'Indonesia',
                'stok' => 8,
                'harga_beli' => 150000,
                'harga' => 210000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Buku Online Cemerlang',
                'judul_buku' => 'Inspirasi Pemimpin Dunia',
                'penerbit' => 'Cemerlang Publisher',
                'penulis' => 'Andika Wicaksana',
                'halaman' => 250,
                'bahasa' => 'Indonesia',
                'stok' => 170,
                'harga_beli' => 260000,
                'harga' => 320000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Pustaka Kreatif',
                'judul_buku' => 'Hidup Seimbang dan Bahagia',
                'penerbit' => 'Kreatif Press',
                'penulis' => 'Lia Kartini',
                'halaman' => 210,
                'bahasa' => 'Indonesia',
                'stok' => 200,
                'harga_beli' => 190000,
                'harga' => 250000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'E-Buku Global',
                'judul_buku' => 'Pemrograman untuk Pemula',
                'penerbit' => 'Global Code Press',
                'penulis' => 'Ilham Fahreza',
                'halaman' => 300,
                'bahasa' => 'Indonesia',
                'stok' => 400,
                'harga_beli' => 280000,
                'harga' => 350000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'token_produks' => strtoupper(Str::random(1)) . '-' . mt_rand(10000, 99999),

                'supliyers' => 'Pustaka Muda Mandiri',
                'judul_buku' => 'Kisah-Kisah Inspiratif',
                'penerbit' => 'Mandiri Print',
                'penulis' => 'Rani Oktaviani',
                'halaman' => 240,
                'bahasa' => 'Indonesia',
                'stok' => 180,
                'harga_beli' => 200000,
                'harga' => 270000,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
        ];



        foreach ($data as $item) {
            Produk::create($item);
        }
    }
}
