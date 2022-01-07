<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Cart;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\User;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function create()
    {
        $oldCartItems = Cart::where('user_id', Auth::user()->id)->get();

        foreach ($oldCartItems as $item) {

            if (!Product::where('id', $item->product_id)->where('quantity', '>=', $item->quantity)->exists()) {
                $cartToDelete = Cart::where('user_id', Auth::user()->id)->where('product_id', $item->product_id)->first();
                $cartToDelete->delete();
            }
        }

        $cartItems = Cart::where('user_id', Auth::user()->id)->get();

        return view('frontend.checkout.create', compact('cartItems'));
    }

    public function store(Request $request)
    {
        //validation
        $this->validate($request, [
            'fname' => 'required',
            'lname' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address1' => 'required',
            'address2' => 'required',
            'city' => 'required',
            'state' => 'required',
            'country' => 'required',
            'pincode' => 'required',
        ]);

        // storing order table
        $order = new Order();

        $order->user_id = Auth::user()->id;
        $order->fname = $request->input('fname');
        $order->lname = $request->input('lname');
        $order->email = $request->input('email');
        $order->phone = $request->input('phone');
        $order->address1 = $request->input('address1');
        $order->address2 = $request->input('address2');
        $order->city = $request->input('city');
        $order->state = $request->input('state');
        $order->country = $request->input('country');
        $order->pincode = $request->input('pincode');
        $order->tracking_no = 'tacking_no' . rand(1111, 9999);

        $total = 0;
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        foreach ($cartItems as $item) {
            $total += $item->product->selling_price * $item->quantity;
        }
        $order->total_price = $total;

        $order->save();

        // storing order_items table 
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();

        foreach ($cartItems as $item) {
            OrderItems::create([
                'order_id' => $order->id,
                'product_id' => $item->product->id,
                'quantity' => $item->quantity,
                'price' => $item->product->selling_price
            ]);

            $product = Product::where('id', $item->product->id)->first();
            if ($product->quantity > 0) {
                $product->quantity = $product->quantity - $item->quantity;
                $product->update();
            }
        }

        // storing user entered data for future use 
        if (Auth::user()->address1 == NULL) {
            $user = User::where('id', Auth::user()->id)->first();

            $user->fname = $request->input('fname');
            $user->lname = $request->input('lname');
            $user->phone = $request->input('phone');
            $user->address1 = $request->input('address1');
            $user->address2 = $request->input('address2');
            $user->city = $request->input('city');
            $user->state = $request->input('state');
            $user->country = $request->input('country');
            $user->pincode = $request->input('pincode');

            $user->update();
        }

        // empty the cart 
        $cartItems = Cart::where('user_id', Auth::user()->id)->get();
        Cart::destroy($cartItems);

        return redirect()->route('home')->with('status', 'Order has been successfully placed!');
    }
}
