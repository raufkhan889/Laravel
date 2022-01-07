@extends('layouts.main-app')

@section('title')
    Wishlist
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">Wishlist</li>
        </ol>
    </nav>

    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-95 pb-100 wishlist">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <h1 class=" text-center">Wishlist</h1>
                    <form action="#">
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>remove</th>
                                        <th>images</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Category</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($wishlists as $item)
                                        <tr class="card-parent">
                                            <td class="product-remove">
                                                <input type="hidden" value="{{ $item->product->id }}"
                                                    class="product_id">
                                                <input type="hidden" value="1" class="qty_val">
                                                <a href="javascript:void(0)" class="delete-wishlist-btn"><i
                                                        class="pe-7s-close bg-danger text-white"></i></a>
                                            </td>
                                            <td class="product-thumbnail">
                                                <a href="#">
                                                    <img src="{{ asset('assets/uploads/product/' . $item->product->image) }}"
                                                        alt="" width="100px">
                                                </a>
                                            </td>
                                            <td class="product-name">
                                                <a href="#">{{ $item->product->name }} </a>
                                            </td>
                                            <td class="product-price-cart">
                                                <span class="amount">Rs:
                                                    {{ $item->product->selling_price }}</span>
                                            </td>
                                            <td class="product-quantity">
                                                {{ $item->product->category->name }}
                                            </td>
                                            <td class="product-subtotal">
                                                <div class="quickview-btn-cart">
                                                    <a class="btn-hover-black add-to-cart-btn h1 py-2"
                                                        href="javascript:void(0)">
                                                        <i class="ti-shopping-cart"></i>
                                                    </a>
                                                </div>
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->
@endsection
