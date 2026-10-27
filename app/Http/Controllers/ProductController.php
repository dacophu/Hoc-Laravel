<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index($id)
    {
        $data = Product::All();
        dd($data);
        // return view('product', compact('id'));
    }
}
