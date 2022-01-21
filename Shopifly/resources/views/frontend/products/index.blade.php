@extends('layouts.front-app')

@section('title')
    {{ $category->name }}
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('category') }}" class="a-rem-style">Collection</a>
                /
                {{ $category->name }}
            </h6>
        </div>
    </div>

    <div class="container py-4">
        <h1 class="text-center mb-3"> {{ $category->name }} Products</h1>
        <div class="row my-4">
            @foreach ($category->products as $product)
                @if ($product->status == '1')
                    <div class="col-md-3 mb-4">
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
                @endif
            @endforeach
        </div>
    </div>

@endsection
