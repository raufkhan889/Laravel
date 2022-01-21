@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Your Cart</h1>

        <table class="table">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($cartItems as $item)
                    <tr>
                        <td scope="row">{{ $item->name }}</td>
                        <td>
                            {{ \Cart::session(auth()->id())->get($item->id)->getPriceSum() }}
                        </td>
                        <td>
                            <form action="{{ route('cart.update', $item->id) }}" method="GET">
                                <input type="number" name="quantity" value="{{ $item->quantity }}">

                                <input type="submit" value="Save">
                            </form>
                        </td>
                        <td>
                            <a href="{{ route('cart.destory', $item->id) }}" class="btn btn-danger">Remove</a>
                        </td>
                    </tr>
                @endforeach

            </tbody>
        </table>

        <h3>
            Total Price:
            ${{ \Cart::session(auth()->id())->getSubTotal() }}
        </h3>

        <a class="btn btn-primary" href="{{ route('cart.checkout') }}" role="button">Proceed to Checkout</a>


    </div>
@endsection
