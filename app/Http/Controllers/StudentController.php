<?php
namespace App\Http\Controllers;
use App\Models\Student;
use Illuminate\Http\Request;
class StudentController extends Controller {
    public function index(){ $students=Student::latest()->paginate(10); return view('students.manage',compact('students')); }
    public function create(){ return view('students.form',['student'=>new Student]); }
    public function store(Request $request){ Student::create($this->validated($request)); return redirect()->route('students.index')->with('success','Mahasiswa ditambahkan.'); }
    public function edit(Student $student){ return view('students.form',compact('student')); }
    public function update(Request $request,Student $student){ $student->update($this->validated($request)); return redirect()->route('students.index')->with('success','Data mahasiswa diperbarui.'); }
    public function destroy(Student $student){ $student->delete(); return redirect()->route('students.index')->with('success','Mahasiswa dihapus.'); }
    private function validated(Request $request): array { return $request->validate(['nama'=>'required|string|max:100','alamat'=>'required|string|max:255','gender'=>'required|in:L,P']); }
}
