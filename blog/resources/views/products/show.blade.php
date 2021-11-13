@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            @if ( $error != '' )
                <div 
                    class="alert alert-danger d-block w-100">
                    {{ $error }}
                </div>
            @else
                <div class="col-lg-6 overflow-hidden">

                    <a href="{{ route('products') }}" class="btn btn-outline-dark float-start">Continue Shopping &larr;</a>

                    <img 
                        src="https://cdn.shopify.com/s/files/1/0070/7032/files/trending-products_c8d0d15c-9afc-47e3-9ba2-f7bad0505b9b.png?format=jpg&quality=90&v=1614559651" 
                        class="img-thumbnail border-0 mt-3" 
                        width="90%" 
                        alt="">
                </div>
                <div class="col-lg-6">
                    <div class="px-3 mt-3">

                        <h2 class="py-4">
                            {{ $product->title }}
                        </h2>
                        <p class="lead overflow-auto" style="height: 120px; overflow: scroll;">
                            {{ $product->description }}
                        </p>
                        <div class="fs-4 py-2">
                            Price <b>${{ $product->price }}</b>
                        </div>
                        <div class="fs-5 text-muted py-2">
                            Stock left - {{ $product->stock }}x
                        </div>

                        <div class="fs-3 py-2">&starf;&starf;&starf;&starf;&star;</div>

                        <button type="submit" class="mt-5 d-block w-100 btn btn-dark">Add to Card</button>
                    </div>
                </div>
            @endif
        </div>
    </div>
@endsection