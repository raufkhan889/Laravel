<?php

namespace App\Http\Controllers\Admin;

use App\Models\Order;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class OrderController extends Controller
{
    public function index()
    {
        $orders = Order::where('status', '0')->get();

        return view('admin.order.index', compact('orders'));
    }

    public function view($id)
    {
        $orders = Order::find($id);

        return view('admin.order.view', compact('orders'));
    }

    public function update(Request $request, $id)
    {
        $order = Order::find($id);

        $order->status = $request->input('status');
        $order->update();

        return redirect()->route('admin.orders')->with('status', 'Order Updated!');
    }

    public function history()
    {
        $orders = Order::where('status', '1')->get();

        return view('admin.order.history', compact('orders'));
    }
}
