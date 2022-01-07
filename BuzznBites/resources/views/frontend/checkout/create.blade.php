@extends('layouts.main-app')

@section('title')
    Checkout
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item"><a href="{{ route('cart') }}" class="text-white">Cart</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">Checkout</li>
        </ol>
    </nav>

    <div class="checkout-area ptb-100">
        <div class="container">
            <form action="{{ route('checkout.store') }}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-12">

                        <div class="checkbox-form">
                            <h3>Billing Details</h3>
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>First Name <span class="required">*</span></label>
                                        <input type="text" name="fname" value="{{ Auth::user()->fname }}" placeholder=""
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Last Name <span class="required">*</span></label>
                                        <input type="text" name="lname" value="{{ Auth::user()->lname }}" placeholder=""
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Email <span class="required">*</span></label>
                                        <input type="email" name="email" value="{{ Auth::user()->email }}" placeholder=""
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Phone <span class="required">*</span></label>
                                        <input type="text" name="phone" value="{{ Auth::user()->phone }}" placeholder=""
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 1 <span class="required">*</span></label>
                                        <input type="text" name="address1" value="{{ Auth::user()->address1 }}"
                                            placeholder="Street address 1" required />
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="checkout-form-list">
                                        <label>Address 2 <span class="required">*</span></label>
                                        <input type="text" name="address2" value="{{ Auth::user()->address2 }}"
                                            placeholder="Street address 2" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>City <span class="required">*</span></label>
                                        <input type="text" name="city" value="{{ Auth::user()->city }}" required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>State<span class="required">*</span></label>
                                        <input type="text" name="state" value="{{ Auth::user()->state }}" placeholder=""
                                            required />
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="country-select">
                                        <label>Country <span class="required">*</span></label>
                                        <select name="country" required>
                                            <option value="volvo">Pakistan</option>
                                            <option value="saab">India</option>
                                            <option value="mercedes">Afghanistan</option>
                                            <option value="audi">Ghana</option>
                                            <option value="audi2">Albania</option>
                                            <option value="audi3">Bahrain</option>
                                            <option value="audi4">Colombia</option>
                                            <option value="audi5">Dominican Republic</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="checkout-form-list">
                                        <label>Postcode<span class="required">*</span></label>
                                        <input type="text" name="pincode" value="{{ Auth::user()->pincode }}"
                                            placeholder="" required />
                                    </div>
                                </div>

                            </div>

                        </div>

                    </div>
                    <div class="col-lg-6 col-md-12 col-12">
                        <div class="your-order">
                            <h3>Your order</h3>
                            @if ($cartItems->count() > 0)
                                <div class="your-order-table table-responsive">
                                    <table>
                                        @php
                                            $total_price = 0;
                                        @endphp
                                        <thead>
                                            <tr>
                                                <th class="product-name">Product</th>
                                                <th class="product-total">Total</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($cartItems as $item)
                                                <tr class="cart_item">
                                                    <td class="product-name">
                                                        {{ $item->product->name }}
                                                        <strong class="product-quantity"> ×
                                                            {{ $item->quantity }}</strong>
                                                    </td>
                                                    <td class="product-total">
                                                        <span class="amount">Rs:
                                                            {{ $item->product->selling_price * $item->quantity }}</span>
                                                    </td>
                                                </tr>
                                                @php
                                                    $total_price += $item->product->selling_price * $item->quantity;
                                                @endphp
                                            @endforeach
                                        </tbody>
                                        <tfoot>
                                            <tr class="cart-subtotal">
                                                <th>Cart Subtotal</th>
                                                <td><span class="amount">Rs: {{ $total_price }}</span></td>
                                            </tr>
                                            <tr class="order-total">
                                                <th>Order Total</th>
                                                <td><strong><span class="amount">Rs:
                                                            {{ $total_price }}</span></strong>
                                                </td>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                                <div class="payment-method">
                                    <div class="payment-accordion">
                                        <div class="panel-group" id="faq">
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a data-toggle="collapse"
                                                            aria-expanded="true" data-parent="#faq" href="#payment-1">Direct
                                                            Bank Transfer.</a></h5>
                                                </div>
                                                <div id="payment-1" class="panel-collapse collapse show">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your
                                                            Order
                                                            ID as the payment reference. Your order won’t be shipped until
                                                            the
                                                            funds
                                                            have cleared in our account. <br> <b>Comming Soon!</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed"
                                                            data-toggle="collapse" aria-expanded="false" data-parent="#faq"
                                                            href="#payment-2">Cheque
                                                            Payment</a></h5>
                                                </div>
                                                <div id="payment-2" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your
                                                            Order
                                                            ID as the payment reference. Your order won’t be shipped until
                                                            the
                                                            funds
                                                            have cleared in our account. <br> <b>Comming Soon!</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed"
                                                            data-toggle="collapse" aria-expanded="false" data-parent="#faq"
                                                            href="#payment-3">PayPal</a>
                                                    </h5>
                                                </div>
                                                <div id="payment-3" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>Make your payment directly into our bank account. Please use your
                                                            Order
                                                            ID as the payment reference. Your order won’t be shipped until
                                                            the
                                                            funds
                                                            have cleared in our account. <br> <b>Comming Soon!</b></p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="panel panel-default">
                                                <div class="panel-heading">
                                                    <h5 class="panel-title"><a class="collapsed"
                                                            data-toggle="collapse" aria-expanded="false" data-parent="#faq"
                                                            href="#payment-4">Cash on
                                                            delivery</a>
                                                    </h5>
                                                </div>
                                                <div id="payment-4" class="panel-collapse collapse">
                                                    <div class="panel-body">
                                                        <p>By defauly if you place your order, you will be able to pay when
                                                            you
                                                            will
                                                            recieve your order. </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="order-button-payment">
                                            <input type="submit" value="Place order" />
                                        </div>
                                    </div>
                                </div>
                            @else
                                <p class="text-muted">
                                    Please add cart to place order.
                                </p>
                            @endif
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
