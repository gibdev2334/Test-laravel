<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

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



// Route::get('/', [MainController::class, 'home']);

// Route::resource('articles', ArticleController::class);



Route::get('/', [ MainController::class, 'home'])->name('home');

Route::get('/articles', [ MainController::class, 'index'])->name('articles');
Route::get('/articles/{slug}', [ MainController::class, 'show'])->name('article');







// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');





//Nous avons ici en bas les routes pour le front-end rajoutés


// contact
Route::get('/contact', [ MainController::class, 'contact'])->name('contact');

//vestiges
Route::get('/vestiges', [ MainController::class, 'vestiges'])->name('vestiges');

//cami romieu
Route::get('/cami', [ MainController::class, 'cami'])->name('cami');
//paiement
Route::get('/paiement', [ MainController::class, 'paiement'])->name('paiement');
Route::get('/paiement/success', [ MainController::class, 'success'])->name('success');
 


