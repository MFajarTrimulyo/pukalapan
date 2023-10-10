<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('admin.list_user.index');
    }

    public function create(){
        return view('admin.list_user.create');
    }
}
