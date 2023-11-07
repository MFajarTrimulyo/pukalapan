<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KategoriBuku;
use App\Models\Buku;

class AboutController extends Controller
{
    public function index()
    {
        return view('/about');
    }

    public function kategori(){
        $kategoris = KategoriBuku::latest()->paginate(6);
        $bukus = Buku::all();
        return view('user.conten.about.index', compact('kategoris', 'bukus'));
    }
}
