<?php

namespace Database\Seeders;

use App\Models\Kategori;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KategoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                "nama_kategori" => "family Friendly",
                "file_buku" => null
            ],
            [
                "nama_kategori" => "Cartoon",
                "file_buku" => "file_buku_ebook.pdf"
            ],
            [
                "nama_kategori" => "Anime",
                "file_buku" => "file_buku_ebook.pdf"
            ]
        ];

        foreach ($data as $item) {
            Kategori::create($item);
        }
    }
}
