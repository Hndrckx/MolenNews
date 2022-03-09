<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ArticleController extends Controller
{
    public function create(){
        $books = Article::all();
        return view('pages.adminOg', compact('books'));
    }

    public function store(Request $request){
        $store = new Article();
        $store->titleOg = $request->titleOg;
        $store->textOg = $request->textOg;
        $store->authorOg = $request->authorOg;
        $store->pictureOg = $request->pictureOg;
        $store->save();
        return redirect("/");
    }

    public function index(){
        $bigs = Article::all();
        return view('pages.ogNews', compact('bigs'));
    }

    public function show($id){
        $showarticles = Article::find($id);
        return view('pages.showAllArticle', compact('showarticles'));
    }

    public function destroy($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect('/');
    }

    public function edit($id){
        
    }
}
