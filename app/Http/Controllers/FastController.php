<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;

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


    public function destroy($id){
        $delete = Fast::find($id);
        $delete->delete();
        return redirect('/');
    }
}