<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;
use PhpParser\Node\Expr\New_;

class FastController extends Controller
{
    public function create(){
        $blogs = Fast::all();
    return view('pages.adminLil', compact('blogs'));
    }



    public function store(Request $request){
        $store = new Fast();
        $store->titleLil = $request->titleLil;
        $store->textLil = $request->textLil;
        $store->authorLil = $request->authorLil;
        $store->pictureLil = $request->pictureLil;
        $store->save();
        return redirect("/");
    }

    public function index(){
        $littles = Fast::all();
        return view('pages.lilNews', compact('littles'));
    }

    public function show($id){
        $shownews = Fast::find($id);
        return view('pages.showAllNews', compact('shownews'));
    }


    public function destroy($id){
        $delete = Fast::find($id);
        $delete->delete();
        return redirect('/');
    }
}