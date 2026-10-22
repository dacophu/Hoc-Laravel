<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $auth = null;
        return view('Pages/home', compact('auth'));
    }
}
