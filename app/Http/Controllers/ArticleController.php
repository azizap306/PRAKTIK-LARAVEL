<?php
namespace App\Http\Controllers;
use App\Models\Article;
use Illuminate\Http\Request;
class ArticleController extends Controller {
    public function index(){ return response()->json(['success'=>true,'message'=>'List Data Article','data'=>Article::latest()->get()],200); }
    public function store(Request $request){ $data=$request->validate(['author'=>'required|string|max:60','title'=>'required|string|max:150','article'=>'required|string','publish_at'=>'required|date']); $article=Article::create($data); return response()->json(['success'=>true,'message'=>'Article Created','data'=>$article],201); }
    public function show(Article $article){ return response()->json(['success'=>true,'message'=>'Detail Article','data'=>$article],200); }
    public function update(Request $request,Article $article){ $data=$request->validate(['author'=>'sometimes|required|string|max:60','title'=>'sometimes|required|string|max:150','article'=>'sometimes|required|string','publish_at'=>'sometimes|required|date']); $article->update($data); return response()->json(['success'=>true,'message'=>'Article Updated','data'=>$article->fresh()],200); }
    public function destroy(Article $article){ $article->delete(); return response()->json(['success'=>true,'message'=>'Article Deleted'],200); }
}
