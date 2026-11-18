<?php
namespace App\Http\Controllers;
use App\Models\Employe;
use Illuminate\Http\Request;
class EmployeController extends Controller {
    public function index(){ $employes=Employe::latest()->paginate(10); return view('employees.index',compact('employes')); }
    public function create(){ return view('employees.form',['employe'=>new Employe]); }
    public function store(Request $request){ $data=$this->validated($request); Employe::create($data); return redirect()->route('employe.index')->with('success','Pegawai ditambahkan.'); }
    public function edit(Employe $employe){ return view('employees.form',compact('employe')); }
    public function update(Request $request,Employe $employe){ $employe->update($this->validated($request)); return redirect()->route('employe.index')->with('success','Data pegawai diperbarui.'); }
    public function destroy(Employe $employe){ $employe->delete(); return redirect()->route('employe.index')->with('success','Pegawai dihapus.'); }
    private function validated(Request $request): array { return $request->validate(['nama'=>'required|string|max:100','alamat'=>'required|string|max:255','gender'=>'required|in:L,P','gaji'=>'required|integer|min:0']); }
}
