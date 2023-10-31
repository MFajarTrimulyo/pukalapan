<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku;
use App\Models\Buku;


class HomepageController extends Controller
{
    public function index()
    {
        return view('/homepage');
    }

    public function kategori(){
        $kategoris = KategoriBuku::latest()->paginate(6);
        $bukus = Buku::all();
        return view('user.homepage.index', compact('kategoris', 'bukus'));
    }
}

