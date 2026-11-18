<?php
namespace Database\Seeders;
use App\Models\Admin; use App\Models\Article; use App\Models\Employe; use App\Models\Student; use Illuminate\Database\Seeder; use Illuminate\Support\Facades\Hash;
class DatabaseSeeder extends Seeder { public function run(): void {
    Admin::updateOrCreate(['email'=>'admin@demo.test'],['name'=>'Administrator','password'=>Hash::make('password')]);
    $mahasiswa = [
        ['nama'=>'Alya Putri','alamat'=>'Jl. Melati No. 12','gender'=>'P'],
        ['nama'=>'Bima Pratama','alamat'=>'Jl. Merdeka No. 8','gender'=>'L'],
        ['nama'=>'Citra Lestari','alamat'=>'Jl. Kenanga No. 5','gender'=>'P'],
        ['nama'=>'Dimas Saputra','alamat'=>'Jl. Sudirman No. 21','gender'=>'L'],
        ['nama'=>'Eka Ramadhan','alamat'=>'Jl. Mawar No. 3','gender'=>'L'],
    ];

    foreach ($mahasiswa as $data) {
        Student::firstOrCreate($data);
    }

    Student::factory()->count(5)->create(); Employe::factory()->count(10)->create(); Article::factory()->count(5)->create();
} }
