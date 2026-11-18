<?php
namespace App\Http\Controllers;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
class AdminController extends Controller {
    public function index(){ $admins=Admin::latest()->paginate(10); return view('admins.index',compact('admins')); }
    public function create(){ return view('admins.form',['admin'=>new Admin]); }
    public function store(Request $request){ $data=$request->validate(['name'=>'required|string|max:100','email'=>'required|email|unique:admins,email','password'=>'required|string|min:8']); $data['password']=Hash::make($data['password']); Admin::create($data); return redirect()->route('admins.index')->with('success','Admin dibuat.'); }
    public function edit(Admin $admin){ return view('admins.form',compact('admin')); }
    public function update(Request $request,Admin $admin){ $data=$request->validate(['name'=>'required|string|max:100','email'=>'required|email|unique:admins,email,'.$admin->id,'password'=>'nullable|string|min:8']); if(!empty($data['password'])) $data['password']=Hash::make($data['password']); else unset($data['password']); $admin->update($data); return redirect()->route('admins.index')->with('success','Admin diperbarui.'); }
    public function destroy(Admin $admin){ if((int)session('admin_id')===$admin->id) return back()->with('error','Akun yang sedang digunakan tidak dapat dihapus.'); $admin->delete(); return back()->with('success','Admin dihapus.'); }
}
