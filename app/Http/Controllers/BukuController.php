<?php

namespace App\Http\Controllers;

use App\Models\Buku;

use Illuminate\Http\Request;
use Illuminate\View\View;

class BukuController extends Controller
{
    /**
     * index
     *
     * @return View
     */
    public function index(): View{
        $renders = Buku::latest()->paginate(5);
        return view('admin.list_buku.index', compact('renders'));
    }

    public function create(){
        return view('admin.list_buku.create');
    }

    public function store(){

    }

    public function edit(){

    }

    public function update(){

    }

    public function destroy(){
        
    }
}
