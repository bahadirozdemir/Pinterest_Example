<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Anasayfa;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/Pintereso/{kategorid}',[Anasayfa::class,'gonder'])->name("anasayfa");
Route::get('/PinteresoPost/{kategorid}/{url}',[Anasayfa::class,'singlepost'])->name("post");
Route::post('/Login',[Anasayfa::class,'girisyap'])->name("checklogin");
Route::get('/',function(){return view("girisyap");});
