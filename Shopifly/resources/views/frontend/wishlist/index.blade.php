@extends('layouts.front-app')

@section('title')
    Your Wishlist
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('home') }}" class="a-rem-style">Home</a>
                /
                <a href="{{ route('wishlist') }}" class="a-rem-style">Wishlist</a>
            </h6>
        </div>
    </div>

    <div class="container">
        <div class="my-5 card shadow">
            <div class="card-body">
                <h1 class="mb-5">Your Wishlist</h1>
                @forelse ($wishlists as $wishlist)
                    <div class="row card-parent">
                        <div class="col-md-2">
                            <img src="{{ asset('assets/uploads/product/' . $wishlist->product->image) }}" width="70px"
                                height="70px" alt="Product img">
                        </div>
                        <div class="col-md-3">
                            <h6>{{ $wishlist->product->name }}</h6>
                        </div>
                        <div class="col-md-2">
                            <h6>Rs: {{ $wishlist->product->selling_price }}</h6>
                        </div>
                        <div class="col-md-3">
                            <input type="hidden" value="{{ $wishlist->product->id }}" class="product_id">
                            <input type="hidden" value="1" class="qty_val">
                            <button type="button" class="btn btn-primary add-to-cart-btn">
                                <i class="material-icons opacity-10">add_shopping_cart</i>
                                Add Cart
                            </button>
                            <input type="hidden" name="product_id" class="product_id"
                                value="{{ $wishlist->product->id }}">
                        </div>
                        <div class="col-md-2">
                            <a href="javascript:void(0)" class="btn btn-danger delete-wishlist-btn">
                                <i class="material-icons opacity-10">cancel</i> Remove
                            </a>
                        </div>
                    </div>

                @empty
                    <div class="alert bg-gray-400">You have not added any product in your wishlist.</div>
                @endforelse
            </div>
        </div>
    </div>

@endsection
