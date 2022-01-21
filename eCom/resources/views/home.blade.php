@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('message'))
            <div class="alert alert-success" role="alert">
                <strong>{{ session('message') }}</strong>
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger" role="alert">
                <strong>{{ session('error') }}</strong>
            </div>
        @endif

        <h1>Products</h1>

        <div class="row">
            @foreach ($products as $product)
                <div class="col-3">
                    <div class="card">
                        <img class="card-img-top" src="{{ asset('demo.jpg') }}" alt="Card image cap">
                        <div class="card-body">
                            <h4 class="card-title">{{ $product->name }}</h4>
                            <p class="card-text">{{ $product->description }}</p>
                            <h3 class="">Price: ${{ $product->price }}</h3>
                        </div>
                        <div class="card-body">
                            <a href="{{ route('cart.add', $product->id) }}" class="card-link btn btn-primary">Add to
                                Cart</a>

                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
