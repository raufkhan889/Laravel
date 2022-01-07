@extends('layouts.main-app')

@section('title')
    Welcome to BuzznBite's
@endsection

@section('content')
    <!-- slider start -->
    @include('layouts.front-inc.slider')



    <div class="header-bottom ptb-30 clearfix d-flex justify-content-center">
        <div class="header-bottom-wrapper pr-200 pl-200">

            <div class="categories-search-wrapper categories-search-wrapper2">
                <div class="all-categories">
                    <div class="select-wrapper">

                        <a class="nav-link dropdown-toggle text-dark" href="#" id="navbarDarkDropdownMenuLink" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            All Categories
                        </a>
                        <ul class="dropdown-menu dropdown-menu" aria-labelledby="navbarDarkDropdownMenuLink">
                            @foreach ($allCategories as $category)
                                <li>
                                    <a class="dropdown-item" href="{{ route('show-category', $category->slug) }}">
                                        {{ $category->name }}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <div class="categories-wrapper">
                    <form action="{{ route('search') }}" method="POST">
                        @csrf
                        <input name="search" placeholder="Enter Your key word" type="text">
                        <button type="submit"> Search </button>
                    </form>
                </div>
            </div>

        </div>
    </div>


    <!-- banner3 area start -->
    <div class="banner-area3 pt-20 pb-115">
        <div class="pl-100 pr-100">
            <div class="container">
                <h1 class="text-center mb-5 ">Popular Categories</h1>
                <div class="row no-gutters">
                    <div class="col-md-12 col-lg-4 col-xl-4">
                        <div class="banner-wrapper mrgn-negative">
                            <a href="{{ route('category') }}"><img src="{{ asset('assets/images/home-cat.jpg') }}"
                                    alt=""></a>
                            <div class="banner-wrapper2-content">
                                <h3 class="text-white"> Trending </h3>
                                <h2 class="text-white">Special</h2>
                                <span class="text-white">All Categories</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-lg-8 col-xl-8">
                        <div class="row no-gutters banner-mrg">
                            @foreach ($trendingCategories as $category)
                                <div class="col-md-6">
                                    <div class="banner-wrapper mrgn-b-5 mrgn-r-5 ">
                                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="">
                                        <div class="banner-wrapper3-content fw-bolder text-white">
                                            <a href="{{ route('show-category', $category->slug) }}"
                                                style="font-size: 24px !important; color: rgb(0, 42, 53); font-weight: bold;">{{ $category->name }}</a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- banner3 area end -->
    <!-- all products area start -->
    <h1 class="text-center mb-5 ">Trending Items</h1>
    <div class="all-products-area pb-70">
        <div class="pl-100 pr-100">
            <div class="container-fluid">
                <div class="row">
                    @foreach ($featuredProducts as $product)
                        <div class="col-lg-3 col-xl-3 col-md-6 card-parent">
                            <div class="product-wrapper mb-45">
                                <div class="product-img" style="height: 370px !important;">
                                    <a href="{{ url('show/' . $product->category->slug . '/' . $product->slug) }}">
                                        <img src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="">
                                    </a>
                                    <span>hot</span>
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
                                            href="{{ url('show/' . $category->slug . '/' . $product->slug) }}">
                                            <i class="pe-7s-look"></i>
                                        </a>
                                    </div>
                                </div>
                                <div class="product-content">
                                    <h4>
                                        <a href="{{ url('show/' . $category->slug . '/' . $product->slug) }}">
                                            {{ $product->name }}
                                        </a>
                                    </h4>
                                    <span>
                                        <strike class="text-danger">Rs: {{ $product->original_price }}</strike>
                                        <span class="text-success"> Rs:
                                            {{ $product->selling_price }}
                                        </span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <!-- all products area end -->

    <div class="food-services-area bg-img pt-200 pb-155" style="background-image: url(frontend/assets/img/bg/12.jpg)">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding1 mb-40">
                        <img src="frontend/assets/img/banner/7.png" alt="">
                        <h4>Choose Resturend</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding2 mb-40">
                        <img src="frontend/assets/img/banner/8.png" alt="">
                        <h4>Select Your Foods</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="single-food-services text-center food-services-padding3 mb-40">
                        <img src="frontend/assets/img/banner/9.png" alt="">
                        <h4>Request for Delevary</h4>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- services area end -->

    <!-- fashion banner area start -->
    <div class="fashion-banner-area pb-120 mt-5">
        <div class="container">
            <div class="fashion-banner-wrapper">
                <img src="{{ asset('frontend/assets/img/banner/home-off-banner.jpg') }}" alt="">
                <div class="text-white fashion-banner-content">
                    <h2>20% off On <br>First <br>Order</h2>
                    <a class="btn-light btn-hover fashion-2-btn" href="{{ route('products') }}">Order Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area start -->
    <div class="brand-logo-area pl-100 pr-100 gray-bg">
        <div class="ptb-135">
            <div class="brand-logo-active owl-carousel">
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/2.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/1.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/3.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/4.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/5.png" alt="">
                </div>
                <div class="single-brand">
                    <img src="frontend/assets/img/brand-logo/6.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- brand logo area end -->
    <!-- testimonials area start -->
    <div class="testimonials-area pt-105 pb-105">
        <div class="container">
            <div class="section-title-2 text-center mb-35">
                <h2>Testimonial</h2>
            </div>
            <div class="testimonials-active owl-carousel">
                <div class="single-testimonial-4 text-center">
                    <img src="frontend/assets/img/icon-img/42.png" alt="">
                    <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt labore et dolore magna.</p>
                    <h4>Newaz Sharif / UI Ux Designer</h4>
                </div>
                <div class="single-testimonial-4 text-center">
                    <img src="frontend/assets/img/icon-img/42.png" alt="">
                    <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt labore et dolore magna.</p>
                    <h4>Newaz Sharif / UI Ux Designer</h4>
                </div>
                <div class="single-testimonial-4 text-center">
                    <img src="frontend/assets/img/icon-img/42.png" alt="">
                    <p>This product is best product i ever get. Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                        sed do eiusmod tempor incididunt labore et dolore magna.</p>
                    <h4>Newaz Sharif / UI Ux Designer</h4>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonials area end -->

@endsection
