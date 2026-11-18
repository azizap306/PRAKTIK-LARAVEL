<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class KalkulatorController extends Controller {
    public function home(){ return view('calculator.multiply',['angka1'=>0,'angka2'=>0,'hasil'=>null]); }
    public function proses(Request $request){ $data=$request->validate(['angka1'=>'required|numeric','angka2'=>'required|numeric']); $data['hasil']=$data['angka1']*$data['angka2']; return view('calculator.multiply',$data); }
    public function segitiga(){ return view('calculator.triangle',['alas'=>'','tinggi'=>'','hasil'=>null]); }
    public function prosesSegitiga(Request $request){ $data=$request->validate(['alas'=>'required|numeric|min:0','tinggi'=>'required|numeric|min:0']); $data['hasil']=0.5*$data['alas']*$data['tinggi']; return view('calculator.triangle',$data); }
}
