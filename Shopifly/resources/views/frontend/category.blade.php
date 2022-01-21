@extends('layouts.front-app')

@section('title')
    Category | Home
@endsection

@section('content')
    <div class="container py-4">
        <h1 class="text-center mb-3">All Categories</h1>
        <div class="row my-4">
            @foreach ($categories as $category)
                <div class="col-md-3 mb-4">
                    <a href="{{ route('show-category', $category->slug) }}" class="a-rem-style">
                        <div class="card ">
                            <img class="card-img-top" src="{{ asset('assets/uploads/category/' . $category->image) }}"
                                width="100%" alt="">
                            <div class="card-body">
                                <h4 class="card-title">{{ $category->name }}</h4>
                                <p class="card-text text-muted " style="height: 50px">
                                    {{ $category->description }}
                                </p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>

@endsection
