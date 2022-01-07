<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class MyorderController extends Controller
{
    public function index()
    {
        $orders = Order::where('user_id', Auth::user()->id)->get();

        return view('frontend.myorders.index', compact('orders'));
    }

    public function view($id)
    {
        $order = Order::where('id', $id)->where('user_id', Auth::user()->id)->first();

        return view('frontend.myorders.view', compact('order'));
    }
}
