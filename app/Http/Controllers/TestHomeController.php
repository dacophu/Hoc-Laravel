<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestHomeController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        echo "Test";
        // return view('home');
    }
}
