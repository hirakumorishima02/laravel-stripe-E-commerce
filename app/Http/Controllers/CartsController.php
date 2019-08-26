<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Cart;
use App\Product;

class CartsController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function store(Request $request){
    
        $product = Product::find($request->get('product_id'));
    
    $cart = new Cart([
        'product_id' => $product->id,
        'qty' => $request->get('qty', 1),
        'price' => $product->price,
    ]);
    
    return redirect('/cart');
      
    }
}
