@extends('layouts.main-app')

@section('title')
    Cart
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">Cart</li>
        </ol>
    </nav>
    <!-- shopping-cart-area start -->
    <div class="cart-main-area pt-50 pb-100">
        <div class="container change-cart">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" id="">
                    <h1 class=" text-center">Cart</h1>
                    <form>
                        @php
                            $total_price = 0;
                        @endphp
                        <div class="table-content table-responsive">
                            <table>
                                <thead>
                                    <tr>
                                        <th>remove</th>
                                        <th>images</th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                </thead>
                                <tbody class="">
                                    @foreach ($cartItems as $item)
                                        <tr class="card-parent">
                                            <td class="product-remove">
                                                <a href="javascript:void(0)" class="delete-cart-btn"><i
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
                                                <div
                                                    class="btn-group form-group text-center mb-3 d-flex align-items-center w-50">
                                                    <input type="hidden" name="product_id" class="product_id"
                                                        value="{{ $item->product->id }}">
                                                    @if ($item->product->quantity >= $item->quantity)
                                                        <button type="button"
                                                            class="btn changeQty btn-secondary dec_btn">-</button>
                                                        <input type="text" name="quantity" value="{{ $item->quantity }}"
                                                            class="qty_val text-center form-control d-block py-2" disabled>
                                                        <button type="button"
                                                            class="btn changeQty btn-secondary inc_btn">+</button>
                                                        @php
                                                            $total_price += $item->product->selling_price * $item->quantity;
                                                        @endphp
                                                    @else
                                                        <h6 class="text-danger ">Out of Stock</h6>
                                                    @endif
                                                </div>
                                            </td>
                                            <td class="product-subtotal">
                                                Rs: {{ $item->product->selling_price * $item->quantity }}
                                            </td>
                                        </tr>

                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{-- <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="coupon-all">
                                    <div class="coupon">
                                        <input id="coupon_code" class="input-text" name="coupon_code" value=""
                                            placeholder="Coupon code" type="text">
                                        <input class="button" name="apply_coupon" value="Apply coupon"
                                            type="submit">
                                    </div>
                                    <div class="coupon2">
                                        <input class="button" name="update_cart" value="Update cart" type="submit">
                                    </div>
                                </div>
                            </div>
                        </div> --}}
                        <div class="row">
                            <div class="col-md-5 ml-auto">
                                <div class="cart-page-total">
                                    <h2>Cart totals</h2>
                                    <ul>
                                        <li>Subtotal<span>Rs: {{ $total_price }}</span></li>
                                        <li>Total<span>Rs: {{ $total_price }}</span></li>
                                    </ul>
                                    <a href="{{ route('checkout.create') }}">Proceed to checkout</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- shopping-cart-area end -->
@endsection
