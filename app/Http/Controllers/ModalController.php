<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModalController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function homekategori(){
        $kategoris = KategoriBuku::latest()->paginate(6);
        $bukus = Buku::all();
        return view('user.kategori.home-kategori', compact('kategoris', 'bukus'));
    }
}
