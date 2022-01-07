@extends('layouts.main-app')

@section('title')
    Order Details
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('orders') }}" class="text-white">Orders</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">Order Details</li>
        </ol>
    </nav>

    <div class="container mb-5">
        <h1 class="my-5 text-center">Order Details</h1>
        <div class="row">

            <div class="col-lg-6 col-md-12 col-12">

                <div class="checkbox-form">
                    <h3>Billing Details</h3>
                    <div class="row">

                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>First Name </label>
                                <input type="text" name="fname" disabled placeholder="{{ $order->fname }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Last Name </label>
                                <input type="text" name="lname" disabled placeholder="{{ $order->lname }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Email </label>
                                <input type="email" name="email" disabled placeholder="{{ $order->email }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Phone </label>
                                <input type="text" name="phone" disabled placeholder="{{ $order->phone }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address 1 </label>
                                <input type="text" name="address1" disabled placeholder="{{ $order->address1 }}" />
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="checkout-form-list">
                                <label>Address 2 </label>
                                <input type="text" name="address2" disabled placeholder="{{ $order->address2 }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>City </label>
                                <input type="text" name="city" disabled placeholder="{{ $order->city }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>State</label>
                                <input type="text" name="state" disabled placeholder="{{ $order->state }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Country</label>
                                <input type="text" name="country" disabled placeholder="{{ $order->country }}" />
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="checkout-form-list">
                                <label>Postcode</label>
                                <input type="text" name="pincode" disabled placeholder="{{ $order->pincode }}" />
                            </div>
                        </div>

                    </div>

                </div>

            </div>
            <div class="col-lg-6 col-md-12 col-12">
                <div class="your-order">
                    <h3>Your order</h3>

                    <div class="your-order-table table-responsive">
                        <table>
                            <thead>
                                <tr>
                                    <th class="product-name">Product</th>
                                    <th class="product-name">Quantity</th>
                                    <th class="product-total">Total</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($order->orderItems as $item)
                                    <tr class="cart_item">
                                        <td class="product-name">
                                            {{ $item->product->name }}
                                        </td>
                                        <td>
                                            <strong class="product-quantity"> ×
                                                {{ $item->quantity }}</strong>
                                        </td>
                                        <td class="product-total">
                                            <span class="amount">Rs:
                                                {{ $item->product->selling_price * $item->quantity }}</span>
                                        </td>
                                    </tr>

                                @endforeach
                            </tbody>
                            <tfoot>

                                <tr class="order-total">
                                    <th>Order Total</th>
                                    <td>
                                        <strong>
                                            <span class="amount">Rs:
                                                {{ $order->total_price }}
                                            </span>
                                        </strong>
                                    </td>
                                </tr>
                            </tfoot>
                        </table>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
