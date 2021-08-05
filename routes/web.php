<?php

use App\Http\Controllers\NewsController;
use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [PublicController::class,'home'])->name('home');

Route::get("/about",[PublicController::class,'aboutUs'])->name('about');

Route::get('/where',[PublicController::class,'where'])->name('where');

Route::get('/who',[PublicController::class,'who'])->name('who');

Route::get('/contact',[PublicController::class,'contact'])->name('contact');
Route::post('/contact',[PublicController::class,'contactReceived'])->name('contact.received');

// noticias
// una pagina con las noticias
Route::get('/noticias',[NewsController::class,'all'])->name('news.all');
Route::get('/noticia/{id}',[NewsController::class,'detail'])->name('news.detail');

