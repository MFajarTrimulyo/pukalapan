<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $renders = User::latest()->paginate(5);
        return view('admin.list_user.index', compact('renders'));
    }

    public function create(){
        return view('admin.list_user.create');
    }
}
