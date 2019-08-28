<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
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
        if(isset($request->file_path)){
            $this->validate($request, [
                'file_path' => [
                    // アップロードされたファイルであること
                    'file',
                ]
            ]);
        if ($request->file('file_path')->isValid([])) {
        $path = $request->file_path->store('file_path', 's3');
        Storage::disk('s3')->setVisibility($path, 'public');
        $url = Storage::disk('s3')->url($path);
        }
        $product = new Product;
        $product->sku = $request->sku;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->file_path = $url;
        if($request->is_downloadble == true){
            $product->is_downloadble = true;
        }
        $product->save();
        return view ('admin/index');
    }
        }
}