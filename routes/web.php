<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fromsubmission;
use App\Http\Controllers\productsCon;
use App\Http\Controllers\helloController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('app');
});
Route::get('/login', function () {
    return view('login/login');
});

Route::get('/signup', function () {
    return view('signup/signup');
});

Route::get('/welcome',[fromsubmission::class,'signupdata']);

Route::get('/products',[productsCon::class,'product']);
Route::get('/hello/{name}',[helloController::class,'getTitleName']);





