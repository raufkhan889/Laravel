<?php

namespace App\Http\Controllers;

use App\Mail\OrderPlaced;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class OrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'shipping_fullname' => 'required',
            'shipping_state' => 'required',
            'shipping_city' => 'required',
            'shipping_zipcode' => 'required',
            'shipping_address' => 'required',
            'shipping_phone' => 'required',
            'payment_method' => 'required'
        ]);

        $order = new Order();

        $order->order_number = uniqid('OrderNumber-');

        $order->shipping_fullname = $request->input('shipping_fullname');
        $order->shipping_address = $request->input('shipping_address');
        $order->shipping_city = $request->input('shipping_city');
        $order->shipping_state = $request->input('shipping_state');
        $order->shipping_zipcode = $request->input('shipping_zipcode');
        $order->shipping_phone = $request->input('shipping_phone');

        if (!$request->has('billing_fullname')) {
            $order->billing_fullname = $request->input('shipping_fullname');
            $order->billing_address = $request->input('shipping_address');
            $order->billing_city = $request->input('shipping_city');
            $order->billing_state = $request->input('shipping_state');
            $order->billing_zipcode = $request->input('shipping_zipcode');
            $order->billing_phone = $request->input('shipping_phone');
        } else {
            $order->billing_fullname = $request->input('billing_fullname');
            $order->billing_address = $request->input('billing_address');
            $order->billing_city = $request->input('billing_city');
            $order->billing_state = $request->input('billing_state');
            $order->billing_zipcode = $request->input('billing_zipcode');
            $order->billing_phone = $request->input('billing_phone');
        }

        $order->grand_total = \Cart::session(auth()->id())->getSubTotal();

        $order->item_count = \Cart::session(auth()->id())->getcontent()->count();

        $order->user_id = auth()->id();

        // change the order payment method 
        if ($request['payment_method'] != 'cash_on_delivery') {
            $order->payment_method = $request['payment_method'];
        }

        $order->save();

        // now save order items (products coming from cart)

        $cartItems = \Cart::session(auth()->id())->getcontent();

        foreach ($cartItems as $item) {
            $order->items()->attach($item->id, ['price' => $item->price, 'quantity' => $item->quantity]);
        }

        // check payments - redriect 
        if ($request['payment_method'] == 'paypal') {
            return '<h1>Paypal Coming Soon!</h1>';
        } elseif ($request['payment_method'] == 'jazzcash') {
            return '<h1>Jazzcash Coming Soon!</h1>';
        }

        // empty the cart
        \Cart::session(auth()->id())->clear();

        // send an email 
        Mail::to($order->user->email)->send(new OrderPlaced($order));

        //show thank you message page


        return redirect()->route('home')->withMessage('Thank you for shopping, your order will arrive Soon!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function show(Order $order)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function edit(Order $order)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Order $order)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Order  $order
     * @return \Illuminate\Http\Response
     */
    public function destroy(Order $order)
    {
        //
    }
}
