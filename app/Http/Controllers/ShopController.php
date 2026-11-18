<?php
namespace App\Http\Controllers;
class ShopController extends Controller {
    private array $products=['Sepatu'=>300000,'Baju'=>200000,'Celana'=>150000];
    public function home(){ return view('shop.home'); }
    public function products(){ return view('shop.products',['products'=>$this->products]); }
    public function detail(int $harga){ $name=array_search($harga,$this->products,true); abort_if($name===false,404); return view('shop.detail',compact('name','harga')); }
    public function about(){ return view('shop.about'); }
}
