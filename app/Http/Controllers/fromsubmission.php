<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fromsubmission extends Controller
{
    //
    public function signupdata(Request $request ){
        $name = $request->input('name');
        return $name;
    }
}
