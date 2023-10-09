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

Route::get('/admin', [App\Http\Controllers\AdminController::class, 'index'])->name('admin.index');
Route::get('/admin/create', [App\Http\Controllers\AdminController::class, 'create'])->name('admin.create');