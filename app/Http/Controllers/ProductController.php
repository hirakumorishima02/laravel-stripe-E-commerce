<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name', 'asc')->get();
        return view('product.index', compact('products'));
    }
    
    public function show($id){
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
}
