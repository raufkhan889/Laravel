@extends('layouts.front-app')

@section('title')
    Welcome to Shopify | Home
@endsection

@section('content')
    @include('layouts.front-inc.sliders')
    <div class="container py-4">
        <h1 class="text-center mb-3">Featured Products</h1>
        <div class="row my-4">
            <div class="owl-carousel home-carousel owl-theme">
                @foreach ($featuredProducts as $product)
                    <div class="item mb-4">
                        {{-- <a href="{{ route('show', $product->category->slug, $product->slug) }}" class="a-rem-style"> --}}
                        <a href="{{ url('show/' . $product->category->slug . '/' . $product->slug) }}"
                            class="a-rem-style">
                            <div class="card ">
                                <img class="card-img-top" src="{{ asset('assets/uploads/product/' . $product->image) }}"
                                    width="100%" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $product->name }}</h4>
                                    <p class="card-text fw-bold">Rs:
                                        <s class="text-danger">{{ $product->original_price }}</s>
                                        <span class="text-success">{{ $product->selling_price }}</span>
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>

        <h1 class="text-center mb-3">Trending Categories</h1>
        <div class="row my-4">
            <div class="owl-carousel home-carousel owl-theme">
                @foreach ($trendingCategories as $category)
                    <div class="item mb-4">
                        <a href="{{ route('show-category', $category->slug) }}" class="a-rem-style">
                            <div class="card ">
                                <img class="card-img-top"
                                    src="{{ asset('assets/uploads/category/' . $category->image) }}" width="100%" alt="">
                                <div class="card-body">
                                    <h4 class="card-title">{{ $category->name }}</h4>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

@endsection

@section('scripts')
    <script>
        $('.home-carousel').owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            // dots: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 4
                }
            }
        })
    </script>
@endsection
