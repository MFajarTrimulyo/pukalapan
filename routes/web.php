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
Route::get('/homepage', function () {
    return view('user.homepage.index');
});

Route::get('/kategori', function () { return view('user.kategori.home-kategori'); });
Route::get('/isi', function () {return view('user.homepage.isi');});
// Route::get('/search', 'SearchController@search')->name('search');

Route::get('/', function (){
    return view('login.login');
});

Route::get('/register', function (){
    return view('login.register');
});

Route::get('/forget', function (){
    return view('forget');
});

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin.user.index');
Route::get('/admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.user.create');

Route::resource('/admin/user', App\Http\Controllers\UserController::class);
Route::resource('/admin/buku', App\Http\Controllers\BukuController::class);


Route::get('/login', function (){
    return view('login.login');
});