<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AuthController extends Controller {
    public function showLogin(){ return view('auth.login'); }
    public function login(Request $request){
        $credentials=$request->validate(['email'=>['required','email'],'password'=>['required','string']]);
        $admin=Admin::where('email',$credentials['email'])->first();
        if(!$admin || !Hash::check($credentials['password'],$admin->password)) return back()->withInput($request->only('email'))->with('error','Email atau password salah.');
        $request->session()->regenerate();
        $request->session()->put(['admin_id'=>$admin->id,'admin_name'=>$admin->name]);
        return redirect()->intended('/dashboard')->with('success','Login berhasil.');
    }
    public function logout(Request $request){ $request->session()->invalidate(); $request->session()->regenerateToken(); return redirect()->route('login')->with('success','Anda telah logout.'); }
}
