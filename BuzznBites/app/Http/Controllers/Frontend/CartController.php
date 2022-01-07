<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();

        return view('frontend.cart.index', compact('cartItems'));
    }

    public function addToCart(Request $request)
    {
        $product_id = $request->input('product_id');
        $product_qty = $request->input('product_qty');

        if (Auth::check()) {
            $product = Product::where('id', $product_id)->first();

            if ($product) {

                if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                    return response()->json(['status' => $product->name . ' is already in the Cart!']);
                }

                $cartItem = new Cart();
                $cartItem->quantity = $product_qty;
                $cartItem->product_id = $product_id;
                $cartItem->user_id = Auth::user()->id;
                $cartItem->save();

                return response()->json(['status' => $product->name . ' Added to Cart!']);
            }
        } else {
            return response()->json(['status' => 'Login First!']);
        }
    }

    public function updateCart(Request $request)
    {
        if (Auth::check()) {
            $product_id = $request->input('product_id');
            $product_qty = $request->input('product_qty');

            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $cartItem->quantity = $product_qty;
                $cartItem->update();

                return response()->json(['status' => 'Cart Updated!']);
            }
        } else {
            return response()->json(['status' => 'Login First!']);
        }
    }

    public function deleteCart(Request $request)
    {
        if (Auth::check()) {
            $product_id = $request->input('product_id');

            if (Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                $cartItem = Cart::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
                $cartItem->delete();

                return response()->json(['status' => 'Item deleted Successfully!']);
            }
        } else {
            return response()->json(['status' => 'Login First!']);
        }
    }

    public function count()
    {
        $cartCount = Cart::where('user_id', Auth::user()->id)->count();

        return response()->json(['count' => $cartCount]);
    }
}
