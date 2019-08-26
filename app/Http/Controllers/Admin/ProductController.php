<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Product;

class ProductController extends Controller
{
    public function index() {
        return view('admin/index');
    }
    
    public function store(Request $request) {
        $product = new Product($request->all());
        if($request->is_downloadble == true){
            $product->is_downloadble = true;
        }
        $product->save();
        return view ('admin/index');
    }
}
