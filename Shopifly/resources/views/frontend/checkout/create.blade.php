@extends('layouts.front-app')

@section('title')
    Checkout Details
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('home') }}" class="a-rem-style">Home</a>
                /
                <a href="{{ route('cart') }}" class="a-rem-style">Cart</a>
                /
                <a href="{{ route('checkout.create') }}" class="a-rem-style">Checkout</a>
            </h6>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('checkout.store') }}" method="POST">
            @csrf
            <div class="row my-5">
                <div class="col-md-7">
                    <div class="card">
                        <div class="card-body">
                            <h3>Shipping Information</h3>
                            <hr>
                            <div class="checkout-form">
                                <div class="row">
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">First Name</label>
                                        <input type="text" name="fname" value="{{ Auth::user()->fname }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">Last Name</label>
                                        <input type="text" name="lname" value="{{ Auth::user()->lname }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">Email</label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">Phone</label>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-12 mb-3 form-group">
                                        <label for="">Address 1</label>
                                        <input type="text" name="address1" value="{{ Auth::user()->address1 }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-12 mb-3 form-group">
                                        <label for="">Address 2</label>
                                        <input type="text" name="address2" value="{{ Auth::user()->address2 }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">City</label>
                                        <input type="text" name="city" value="{{ Auth::user()->city }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">State</label>
                                        <input type="text" name="state" value="{{ Auth::user()->state }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">Country</label>
                                        <input type="text" name="country" value="{{ Auth::user()->country }}"
                                            class="form-control" required>
                                    </div>
                                    <div class="col-md-6 mb-3 form-group">
                                        <label for="">Pincode</label>
                                        <input type="text" name="pincode" value="{{ Auth::user()->pincode }}"
                                            class="form-control" required>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="card">
                        <div class="card-body">
                            <h3>Order Details</h3>
                            <hr>
                            @if ($cartItems->count() > 0)
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Quantity</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($cartItems as $item)
                                            <tr>
                                                <td scope="row">{{ $item->product->name }}</td>
                                                <td>{{ $item->quantity }}</td>
                                                <td>Rs: {{ $item->product->selling_price }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                <button type="submit" class="btn btn-primary float-end">Place Order</button>
                            @else
                                <p class="text-muted">
                                    Please add cart to place order.
                                </p>
                            @endif

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
