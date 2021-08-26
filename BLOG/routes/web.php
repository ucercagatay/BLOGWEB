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

Route::get('/',[Controllers\Anasayfa::class,'anasayfa']);
Route::get('/anasayfa',[Controllers\Anasayfa::class,'anasayfa']);
Route::get('/feedback',[Controllers\FeedBack::class,'feedback'])->name('feedback');
Route::post('/feedback',[Controllers\Feedback::class,'CreateFeedback'])->middleware('wordFilter')->name('feedback-post');
Route::get('/adminlog',[Controllers\admin::class,'adminlog'])->middleware('isLogin')->name('adminlog');
Route::post('/adminlog',[Controllers\admin::class,'adminPass'])->name('adminPass');
Route::get('/adminpanel',[Controllers\admin::class,'adminpanel'])->middleware('isAdmin')->name('adminpanel');

