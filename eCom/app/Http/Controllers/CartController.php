<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class CartController extends Controller
{
    public function add($product_id)
    {
        $product = Product::find($product_id);

        \Cart::session(auth()->id())->add(array(
            'id' => $product->id,
            'name' => $product->name,
            'price' => $product->price,
            'quantity' => 1,
            'associatedModel' => $product
        ));

        return redirect()->route('cart.index');
    }

    public function index()
    {
        $cartItems = \Cart::session(auth()->id())->getContent();

        return view('cart.index', [
            'cartItems' => $cartItems
        ]);
    }

    public function destory($item_id)
    {
        \Cart::session(auth()->id())->remove($item_id);

        return back();
    }

    public function update($item_id, Request $request)
    {
        \Cart::session(auth()->id())->update($item_id, [
            'quantity' => array(
                'relative' => false,
                'value' => $request->quantity
            )
        ]);

        return back();
    }

    public function checkout()
    {
        return view('cart.checkout');
    }
}
