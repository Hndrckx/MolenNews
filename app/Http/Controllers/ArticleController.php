<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    public function create(){
        return view('pages.adminOg');
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
}
