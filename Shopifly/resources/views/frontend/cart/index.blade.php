@extends('layouts.front-app')

@section('title')
    Your Cart
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('home') }}" class="a-rem-style">Home</a>
                /
                <a href="{{ route('cart') }}" class="a-rem-style">Cart</a>
            </h6>
        </div>
    </div>
    <div class="container">
        <div class="my-5 card shadow">
            <div class="card-body">
                <h1 class="mb-5">Your Cart</h1>
                @php
                    $cartTotal = 0;
                @endphp
                @foreach ($cartItems as $item)
                    <div class="row card-parent">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/uploads/product/' . $item->product->image) }}" width="70px"
                                height="70px" alt="Product img">
                        </div>
                        <div class="col-md-3">
                            <h6>{{ $item->product->name }}</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Rs: {{ $item->product->selling_price }}</h6>
                        </div>
                        <div class="col-md-3">
                            <div class="btn-group form-group text-center mb-3 d-flex align-items-center w-50">
                                <input type="hidden" name="product_id" class="product_id"
                                    value="{{ $item->product->id }}">
                                @if ($item->product->quantity >= $item->quantity)
                                    <button type="button" class="btn changeQty btn-secondary dec_btn">-</button>
                                    <input type="text" name="quantity" value="{{ $item->quantity }}"
                                        class="qty_val form-control d-block mb-3 py-2" disabled>
                                    <button type="button" class="btn changeQty btn-secondary inc_btn">+</button>
                                    @php
                                        $cartTotal += $item->product->selling_price * $item->quantity;
                                    @endphp
                                @else
                                    <h6 class="text-danger ">Out of Stock</h6>
                                @endif

                            </div>
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" class="btn btn-danger delete-cart-btn">
                                <i class="material-icons opacity-10">delete</i>
                                Delete
                            </a>
                        </div>
                    </div>

                @endforeach
            </div>
            <div class="card-footer">
                <span class="fw-bold">
                    Total Price : Rs {{ $cartTotal }}
                </span>
                <a href="{{ route('checkout.create') }}" class="btn btn-outline-success float-end">Proceed
                    Checkout</a>
            </div>
        </div>
    </div>
@endsection
