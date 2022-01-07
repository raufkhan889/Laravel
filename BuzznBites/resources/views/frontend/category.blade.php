@extends('layouts.main-app')

@section('title')
    Category
@endsection

@section('content')
    <div class="popular-product-area wrapper-padding-6 pt-50 pb-70 bg-img"
        style="background-image: url(frontend/assets/img/bg/13.jpg)">
        <div class="container-fluid">
            <div class="section-title-10 text-center mb-85">
                <h2>All Categories</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text </p>
            </div>
            <div class="popular-product-wrapper">
                <div class="row">
                    @foreach ($categories as $category)
                        <div class="col-md-4">
                            <div class="single-popular-product card food-border-1 text-center mb-40">
                                <div class="image-custome-wrapper">
                                    <a href="{{ route('show-category', $category->slug) }}">
                                        <img src="{{ asset('assets/uploads/category/' . $category->image) }}" alt="">
                                    </a>
                                </div>
                                <h3 class="py-3"><a href="{{ route('show-category', $category->slug) }}">
                                        {{ $category->name }}</a>
                                </h3>
                                <p class="paragraph-str-limit text-muted">
                                    {{ \Illuminate\Support\Str::limit($category->description, 90) }}</p>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
