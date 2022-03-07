<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

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

    public function destroy($id){
        $delete = Article::find($id);
        $delete->delete();
        return redirect('/');
    }
}
