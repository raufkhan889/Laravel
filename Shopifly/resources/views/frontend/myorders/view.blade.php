@extends('layouts.front-app')

@section('title')
    Order View
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('home') }}" class="a-rem-style">Home</a>
                /
                <a href="{{ route('orders') }}" class="a-rem-style">My Orders</a>
                /
                <a href="#" class="a-rem-style">View</a>
            </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="row my-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Shipping Information</h3>
                        <hr>
                        <div class="checkout-form">
                            <div class="row">
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">First Name</label>
                                    <input type="text" name="fname" placeholder="{{ $orders->fname }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Last Name</label>
                                    <input type="text" name="lname" placeholder="{{ $orders->lname }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Email</label>
                                    <input type="email" name="email" placeholder="{{ $orders->email }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Phone</label>
                                    <input type="text" name="phone" placeholder="{{ $orders->phone }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="">Address 1</label>
                                    <input type="text" name="address1" placeholder="{{ $orders->address1 }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="">Address 2</label>
                                    <input type="text" name="address2" placeholder="{{ $orders->address2 }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">City</label>
                                    <input type="text" name="city" placeholder="{{ $orders->city }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">State</label>
                                    <input type="text" name="state" placeholder="{{ $orders->state }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Country</label>
                                    <input type="text" name="country" placeholder="{{ $orders->country }}"
                                        class="form-control" disabled>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Pincode</label>
                                    <input type="text" name="pincode" placeholder="{{ $orders->pincode }}"
                                        class="form-control" disabled>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h3>Order Details</h3>
                        <hr>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders->orderItems as $item)
                                    <tr>
                                        <td scope="row">{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/product/' . $item->product->image) }}"
                                                width="50px" height="50px" alt="">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h3>Grand Total <span class="float-end">Rs: {{ $orders->total_price }}</span></h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
