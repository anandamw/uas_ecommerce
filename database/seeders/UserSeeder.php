<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $data = [
            [
                'name' => 'admin',
                'email' => 'admin@gmail.com',
                'password' => bcrypt('admin'),
                'role' => 'admin',
            ],
            [
                'name' => 'Karyawan',
                'email' => 'karyawan@gmail.com',
                'password' => bcrypt('karyawan'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'John Doe',
                'email' => 'johndoe@gmail.com',
                'password' => bcrypt('password1234'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Jane Smith',
                'email' => 'janesmith@gmail.com',
                'password' => bcrypt('password1235'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Michael Brown',
                'email' => 'michaelbrown@gmail.com',
                'password' => bcrypt('password1236'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Emily Davis',
                'email' => 'emilydavis@gmail.com',
                'password' => bcrypt('password1237'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Chris Wilson',
                'email' => 'chriswilson@gmail.com',
                'password' => bcrypt('password1238'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Laura Johnson',
                'email' => 'laurajohnson@gmail.com',
                'password' => bcrypt('password1239'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'David Miller',
                'email' => 'davidmiller@gmail.com',
                'password' => bcrypt('password1230'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Sarah Wilson',
                'email' => 'sarahwilson@gmail.com',
                'password' => bcrypt('password12311'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Robert Moore',
                'email' => 'robertmoore@gmail.com',
                'password' => bcrypt('password12312'),
                'role' => 'karyawan',
            ],
            [
                'name' => 'Sophia Taylor',
                'email' => 'sophiataylor@gmail.com',
                'password' => bcrypt('password123345'),
                'role' => 'karyawan',
            ],
        ];




        foreach ($data as $item) {
            User::create($item);
        }
    }
}
