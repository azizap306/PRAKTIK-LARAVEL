<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('students')->insert([
            [
                'nama' => 'Andi Saputra',
                'alamat' => 'Kediri',
                'gender' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Siti Aminah',
                'alamat' => 'Surabaya',
                'gender' => 'Perempuan',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama' => 'Budi Santoso',
                'alamat' => 'Malang',
                'gender' => 'Laki-laki',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
