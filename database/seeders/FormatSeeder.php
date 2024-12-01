<?php

namespace Database\Seeders;

use App\Models\Format;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class FormatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "nama_format" => "Soft Cover",
            ],
            [
                "nama_format" => "E-Book",
            ]
        ];

        foreach ($datas as $item) {
            Format::create($item);
        }
    }
}
