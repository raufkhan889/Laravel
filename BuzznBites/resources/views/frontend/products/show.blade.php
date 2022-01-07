@extends('layouts.main-app')

@section('title')
    {{ $product->name }}
@endsection

@section('content')

    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('category') }}" class="text-white">Categories</a></li>
            <li class="breadcrumb-item"><a href="{{ route('show-category', $product->category->slug) }}"
                    class="text-white">{{ $product->category->name }}</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">{{ $product->name }}</li>
        </ol>
    </nav>

    <div class="product-details ptb-100 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-7 col-12">
                    <div class="product-details-img-content">
                        <div class="product-details-tab mr-70">
                            <div class="product-details-large tab-content">
                                <div class="tab-pane active show fade">
                                    <div class="">
                                        <a href="javascript:void">
                                            <img src="{{ asset('assets/uploads/product/' . $product->image) }}"
                                                width="100%" alt="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 col-lg-5 col-12 card-parent">
                    <div class="product-details-content">
                        <h3>{{ $product->name }}</h3>
                        <div class="rating-number">
                            <div class="quick-view-rating">
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star red-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                                <i class="pe-7s-star"></i>
                            </div>
                            <div class="quick-view-number">
                                <span>2 Ratting (S)</span>
                            </div>
                        </div>
                        <div class="details-price">
                            <span class="text-danger"> <s> Original Price - Rs:120 </s></span>
                        </div>
                        <div class="details-price">
                            <span class="text-success">Selling Price - Rs:120</span>
                        </div>
                        <p>
                            {{ $product->small_description }}
                        </p>

                        <div class="quickview-plus-minus">
                            <input type="hidden" name="product_id" value="{{ $product->id }}" class="product_id">
                            @if ($product->quantity > 0)
                                <div class="cart-plus-minus">
                                    <input type="text" value="1" name="qtybutton" class="cart-plus-minus-box qty_val">
                                </div>
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black add-to-cart-btn" href="#">add to cart</a>
                                </div>
                            @else
                                <div class="quickview-btn-cart">
                                    <a class="btn-hover-black" href="#">Unavailable</a>
                                </div>
                            @endif
                            <div
                                class="quickview-btn-wishlist 
                            {{ \App\Models\Wishlist::where('product_id', $product->id)->exists() ? 'bg-dark' : '' }} ">
                                <a class="btn-hover" href="javascript:void(0)"><i
                                        class="pe-7s-like add-to-wishlist"></i></a>
                            </div>
                        </div>
                        <div class="product-details-cati-tag mt-35">
                            <ul>
                                <li class="categories-title">Categories : {{ $product->category->name }}</li>

                            </ul>
                        </div>
                        <div class="product-details-cati-tag mtb-10">
                            <ul>
                                <li class="categories-title">Tags : {{ $product->category->meta_keywords }}</li>

                            </ul>
                        </div>
                        <div class="product-share">
                            <ul>
                                <li class="categories-title">Share :</li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-facebook"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-twitter"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-pinterest"></i>
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="icofont icofont-social-flikr"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="product-description-review-area pb-90">
        <div class="container">
            <div class="product-description-review text-center">
                <div class="description-review-title nav" role=tablist>
                    <a class="active" href="#pro-dec" data-toggle="tab" role="tab" aria-selected="true">
                        Description
                    </a>
                    {{-- <a href="#pro-review" data-toggle="tab" role="tab" aria-selected="false">
                        Reviews (0)
                    </a> --}}
                </div>
                <div class="description-review-text tab-content">
                    <div class="tab-pane active show fade" id="pro-dec" role="tabpanel">
                        <p>
                            {{ $product->description }}
                        </p>
                    </div>
                    <div class="tab-pane fade" id="pro-review" role="tabpanel">
                        <a href="#">Be the first to write your review!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
