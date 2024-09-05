<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\product;
use Illuminate\Http\Request;

class cartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view('cart.index',compact('cart'));
    }

    public function store(Request $request)
    {
        $product = product::find($request->input('product_id'));
        if(!$product){
            return back()->withErrors(['product not found']);
        }
        $cart = Cart::create([
            'product_id '=> $product->id,
            'quantity'=>$request->input('quantity'),
        ]);
        return redirect()->route('cart.index');

    }
    public function destory($id)
    {
        $cart = Cart::find($id);
        if(!$cart){
            return back()->withErrors(['cart item not found']);
        }
        $cart->delete();
        return redirect()->route('cart.index');
    }
}
