@extends('layouts.front-app')

@section('title', $product->name)

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('category') }}" class="a-rem-style">Collection</a>
                /
                <a href="{{ route('show-category', $product->category->name) }}"
                    class="a-rem-style">{{ $product->category->name }}</a>
                /
                {{ $product->name }}
            </h6>
        </div>
    </div>

    <div class="container">
        <div class="card shadow">
            <div class="card-body">
                <div class="row card-parent">
                    <div class="col-md-4 border-right">
                        <img src="{{ asset('assets/uploads/product/' . $product->image) }}" width="100%" alt="">
                    </div>
                    <div class="col-md-8">
                        <div class="d-flex justify-content-between align-items-center">
                            <h2 class="mb-0">
                                {{ $product->name }}
                            </h2>
                            @if ($product->trending == '1')
                                <h4 class="badge bg-danger p-2">Trending</h4>
                            @endif

                        </div>

                        <hr>

                        <label class="me-3">Original Price: <s
                                class="text-danger">Rs:{{ $product->original_price }}</s></label> -
                        <label class="me-3">Sale Price: <span
                                class="text-success">Rs:{{ $product->selling_price }}</span></label>

                        <p class="mb-3" style="height: 80px">
                            {{ $product->description }}
                        </p>
                        <hr>

                        @if ($product->quantity > 0)
                            <h4 class="badge bg-success p-2">In Stock</h4>
                        @else
                            <h4 class="badge bg-danger p-2">Out of Stock</h4>
                        @endif

                        <div class="row mt-2">
                            <label for="quantity">Quantity</label>
                            <div class="col-md-2">
                                <div class="btn-group form-group text-center mb-3 d-flex align-items-center">
                                    <button type="button" class="btn btn-secondary dec_btn">-</button>
                                    <input type="text" name="quantity" value="1"
                                        class="qty_val form-control d-block mb-3 py-2" disabled>
                                    <input type="hidden" name="product_id" class="product_id"
                                        value="{{ $product->id }}">
                                    <button type="button" class="btn btn-secondary inc_btn">+</button>
                                </div>
                            </div>

                            <div class="col-md-10">

                                <button type="button" class="btn btn-success me-3 float-start add-to-wishlist">
                                    @if (App\Models\Wishlist::where('product_id', $product->id)->exists())
                                        <i class="material-icons opacity-10">favorite</i>
                                    @else
                                        <i class="material-icons opacity-10">favorite_border</i>
                                    @endif

                                    Add to Wishlist
                                </button>
                                @if ($product->quantity > 0)
                                    <button type="button" class="btn btn-primary me-3 float-start add-to-cart-btn">
                                        <i class="material-icons opacity-10">add_shopping_cart</i>
                                        Add to Cart
                                    </button>
                                @endif
                            </div>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
