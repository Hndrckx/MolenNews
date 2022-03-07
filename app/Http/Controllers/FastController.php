<?php

namespace App\Http\Controllers;

use App\Models\Fast;
use Illuminate\Http\Request;

class FastController extends Controller
{
    public function create(){
    return view('pages.adminLil');
    }

    public function store(Request $request){
        $store = new fast();
        $store->titleLil = $request->titleLil;
        $store->textLil = $request->textLil;
        $store->authorLil = $request->authorLil;
        $store->pictureLil = $request->pictureLil;
        $store->save();
        return redirect("/");
    }
}
