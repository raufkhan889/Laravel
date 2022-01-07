<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Product;
use App\Models\Wishlist;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class WishlistController extends Controller
{
    public function index()
    {
        $wishlists = Wishlist::where('user_id', Auth::user()->id)->get();

        return view('frontend.wishlist.index', compact('wishlists'));
    }

    public function addToWishlist(Request $request)
    {
        if (Auth::check()) {
            $product_id = $request->input('product_id');

            if (Product::where('id', $product_id)->exists()) {

                if (!Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
                    $wishlist = new Wishlist();

                    $wishlist->product_id = $product_id;
                    $wishlist->user_id = Auth::user()->id;
                    $wishlist->save();

                    return response()->json(['status' => 'Product added to wishlist!']);
                } else {
                    return response()->json(['status' => 'Product is already in the wishlist!']);
                }
            } else {
                return response()->json(['status' => 'Product not available!']);
            }
        } else {
            return response()->json(['status' => 'Please login first!']);
        }
    }

    public function deleteWishlist(Request $request)
    {
        $product_id = $request->input('product_id');

        if (Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->exists()) {
            $wishlist = Wishlist::where('product_id', $product_id)->where('user_id', Auth::user()->id)->first();
            $wishlist->delete();

            return response()->json(['status' => 'Product has been removed from wishlist!']);
        } else {
            return response()->json(['status' => 'Product does not exists in wishlist!']);
        }
    }

    public function count()
    {
        $wishlistCount = Wishlist::where('user_id', Auth::user()->id)->count();

        return response(['count' => $wishlistCount]);
    }
}
