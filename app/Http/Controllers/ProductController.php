<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class ProductController extends Controller
{
    public function index(){
        $products = Product::orderBy('name', 'asc')->paginate(5);
        return view('product.index', compact('products'));
    }
    
    public function show($id){
        $product = Product::findOrFail($id);
        return view('product.show', compact('product'));
    }
}
