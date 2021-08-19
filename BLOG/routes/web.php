<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers;

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

Route::get('/',function (){
    return view('anasayfa');
});
Route::get('/anasayfa',[Controllers\Anasayfa::class,'anasayfa']);
Route::get('/giris',[Controllers\Giris::class,'giris']) ->name('giris');
Route::get('/feedback',[Controllers\FeedBack::class,'feedback'])->name('feedback');
Route::get('/adminlog',[Controllers\admin::class,'adminlog'])->name('adminlog');
Route::post('/feedback/post',[Controllers\FeedBack::class,'postFeedback'])->name('post-feedback');
