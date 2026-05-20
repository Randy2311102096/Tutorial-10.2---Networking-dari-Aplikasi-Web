<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product; // <--- PASTIKAN BARIS INI ADA!

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all(); 
        return response()->json($products);
    }
}