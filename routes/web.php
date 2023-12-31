<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/homepage', [App\Http\Controllers\HomepageController::class, 'kategori'])->name('kategori');

Route::get('/kategori', [App\Http\Controllers\HomeController::class, 'homekategori'])->name('kategori');
Route::get('/isi', function () {return view('user.homepage.isi');});
Route::get('/contact', [App\Http\Controllers\HomepageController::class, 'contact'])->name('contact');

// Route::get('/search', 'SearchController@search')->name('search');
Route::get('/about', function () {return view('user.conten.about.index');});
Route::get('/chat', function () {return view('user.chat.index');});



Route::get('/', function (){
    return view('welcome');
});

Route::get('/forget', function (){
    return view('forget');
});

Route::get('/modal', function (){
    return view('user.modal-buku.modal');
});

Route::resource('/admin/buku/kategori', App\Http\Controllers\KategoriBukuController::class);
Route::resource('/admin/user', App\Http\Controllers\UserController::class);
Route::resource('/admin/buku', App\Http\Controllers\BukuController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

