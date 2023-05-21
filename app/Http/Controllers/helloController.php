<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class helloController extends Controller
{
    public function getTitleName($name){
        return view('pages/about',['name'=>$name]);
    }
    //
}
