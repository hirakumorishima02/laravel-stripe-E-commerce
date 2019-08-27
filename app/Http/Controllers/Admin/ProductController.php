<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Product;
use App\Order;

class ProductController extends Controller
{
    public function index() {
        return view('admin/index');
    }
    
    public function orders() {
        $orders = Order::all();
        return view('admin/orders',compact('orders'));
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
