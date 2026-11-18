<?php
namespace App\Http\Controllers;
use App\Models\Student;
class MahasiswaController extends Controller {
    public function index(){ $mahasiswa=Student::orderBy('nama')->get(); return view('students.index',compact('mahasiswa')); }
}
