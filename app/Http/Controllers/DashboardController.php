<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class DashboardController extends Controller {
    public function home(){ return view('dashboard.page',['title'=>'Home','description'=>'Selamat datang di dashboard praktikum Laravel.']); }
    public function product(){ return view('dashboard.page',['title'=>'Product','description'=>'Halaman pengelolaan informasi produk.']); }
    public function service(){ return view('dashboard.page',['title'=>'Service','description'=>'Halaman informasi layanan.']); }
    public function contact(){ return view('dashboard.page',['title'=>'Contact','description'=>'Hubungi pengelola melalui email admin@demo.test.']); }
    public function about(){ return view('dashboard.page',['title'=>'About','description'=>'Aplikasi praktikum framework Laravel dengan Bootstrap.']); }
}
