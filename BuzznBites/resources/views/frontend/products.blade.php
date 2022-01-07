@extends('layouts.main-app')

@section('title')
    Products
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">All Products</li>
        </ol>
    </nav>

    <div class="popular-product-area wrapper-padding-6 pt-50 pb-70 bg-img"
        style="background-image: url(frontend/assets/img/bg/13.jpg)">
        <div class="container-fluid">
            <div class="section-title-10 text-center mb-85">
                <h2>All Products</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text </p>
            </div>
            <div class="">

                <div class="row">
                    @foreach ($products as $product)
                        <div class="col-md-4 col-xl-3 card-parent mb-4">
                            <div class="product-wrapper mb-30">
                                <div class="product-img">
                                    <a href="{{ url('show/' . $product->category->slug . '/' . $product->slug) }}">
                                        <img src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="">
                                    </a>
                                    @if ($product->trending == '1')
                                        <span>hot</span>
                                    @endif

                                    <div class="product-action">
                                        <a class="animate-left" title="Wishlist" href="javascript:void(0)">
                                            <i class="pe-7s-like add-to-wishlist"></i>
                                        </a>
                                        <a class="animate-top" title="Add To Cart" href="javascript:void(0)">
                                            <i class="pe-7s-cart add-to-cart-btn"></i>
                                            <input type="hidden" value="{{ $product->id }}" class="product_id">
                                            <input type="hidden" value="1" class="qty_val">
                                        </a>
                                        <a class="animate-right"
                                            href="{{ url('show/' . $product->category->slug . '/' . $product->slug) }}">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4><a href="{{ url('show/' . $product->category->slug . '/' . $product->slug) }}">
                                            {{ $product->name }} </a></h4>
                                    <div class="popular-product">
                                        <span class="pizza-old-price">Rs:{{ $product->original_price }}</span>
                                        <span class="pizza-new-price">Rs:{{ $product->selling_price }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>


                    @endforeach

                </div>

            </div>
            <div class="paginate mb-5">
                {{ $products->links() }}
            </div>
        </div>

    </div>

@endsection
