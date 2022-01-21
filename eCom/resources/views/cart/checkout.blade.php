@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Checkout</h1>

        <h3> Shipping information </h3>

        <form action="{{ route('order.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="">Full Name</label>
                <input type="text" name="shipping_fullname" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">State</label>
                <input type="text" name="shipping_state" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">City</label>
                <input type="text" name="shipping_city" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Zipcode</label>
                <input type="number" name="shipping_zipcode" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Full Address</label>
                <input type="text" name="shipping_address" id="" class="form-control">
            </div>

            <div class="form-group">
                <label for="">Mobile</label>
                <input type="text" name="shipping_phone" id="" class="form-control">
            </div>

            <h4>Payment Method:</h4>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" value="cash_on_delivery" checked>
                    Cash on Delivery
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" value="paypal">
                    Paypal
                </label>
            </div>

            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input" name="payment_method" value="jazzcash">
                    Jazzcash
                </label>
            </div>

            <button type="submit" class="btn btn-primary mt-3">Place Order</button>
        </form>
    </div>
@endsection
