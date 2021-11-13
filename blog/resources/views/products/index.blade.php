@extends('layouts.app')

@section('content')
<div class="container">
    <h1 class="text-center">All Products</h1>
    <p class="fst-italic lead text-muted text-center py-3">Finds the suitable one</p>

    <div class="row pb-3">
        
        @foreach ($products as $product)
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="card m-3 shadow-lg" style="width: 16rem;">
                    <img src="https://cdn.shopify.com/s/files/1/0070/7032/files/trending-products_c8d0d15c-9afc-47e3-9ba2-f7bad0505b9b.png?format=jpg&quality=90&v=1614559651"
                        class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">
                            {{ $product->title }}
                        </h5>
                        <p class="card-text" style="height: 4rem; overflow: hidden;">
                            {{ $product->description }}
                        </p>
                        <div class="mb-1">
                            Price: 
                            <b>{{ $product->price }}</b> 
                        </div>
                        <div class="mb-2 fst-italic text-muted">
                            Stock left - {{ $product->stock }}x 
                        </div>
                        <a 
                            href="{{ asset('products/' . $product->id) }}" 
                            class="btn btn-dark">
                            View Product
                        </a>
                    </div>
                </div>
            </div>
        @endforeach

    </div>
    {{-- end of row --}}
</div>
@endsection