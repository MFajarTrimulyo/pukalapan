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

Route::get('/kategori', function () { return view('page.kategori'); });
Route::get('/isi', function () {return view('homepage.isi');});
Route::get('/search', 'SearchController@search')->name('search');

Route::get('/login', function (){
    return view('login');
});

Route::get('/register', function (){
    return view('register');
});

Route::get('/forget', function (){
    return view('forget');
});

Route::get('/admin/user', [App\Http\Controllers\UserController::class, 'index'])->name('admin.user.index');
Route::get('/admin/user/create', [App\Http\Controllers\UserController::class, 'create'])->name('admin.user.create');

Route::get('/admin/buku', [App\Http\Controllers\BukuController::class, 'index'])->name('admin.buku.index');
Route::get('/admin/buku/create', [App\Http\Controllers\BukuController::class, 'create'])->name('admin.buku.create');

