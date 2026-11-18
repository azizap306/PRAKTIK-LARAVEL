<?php
namespace App\Http\Controllers;
class WebController extends Controller {
    public function home(){ return '<h1>Ini adalah Controllers Web</h1>'; }
    public function profil(string $nama){ return view('dashboard.page',['title'=>'Profil '.$nama,'description'=>'Laman profil '.$nama]); }
    public function biodata(){ return view('shop.biodata',['nama'=>'Rudy Eko Prasetya','alamat'=>'Kediri']); }
}
