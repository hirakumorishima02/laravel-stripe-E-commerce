<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CartsController extends Controller
{
  public function store(Request $request)
  {

  $product = Product::find($request->get('product_id'));

  $cart = new Cart([
      'product_id' => $product->id,
      'qty' => $request->get('qty', 1),
      'price' => $product->price,
  ]);

  Auth::user()->cart()->save($cart);
  return redirect('/cart');
      
  }
}
