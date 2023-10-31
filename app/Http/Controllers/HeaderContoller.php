<?php

namespace App\Http\Controllers;

use App\Models\KategoriBuku;
use App\Models\Buku;
use Illuminate\Http\Request;

class HeaderContoller extends Controller
{
    public function index()
    {
        return view('/header');
    }

    public function navkategori(){
        $headers = KategoriBuku::latest()->paginate(6);
    }
}
