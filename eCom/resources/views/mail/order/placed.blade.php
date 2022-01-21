# Order Successfull <br>

Thank you for your order, your items will arrive soon <br>

Here is the items breakdown <br>

<h1> Checkout </h1>

<table class="table">
    <thead>
        <tr>
            <th>Order Name</th>
            <th>Quantity</th>
            <th>Price</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($order->items as $item)
            <tr>
                <td scope="row">{{ $item->name }}</td>
                <td>{{ $item->pivot->quantity }}</td>
                <td>{{ $item->pivot->price }}</td>
            </tr>
        @endforeach
    </tbody>
</table>

<h3>
    Total : {{ $order->grand_total }}
</h3>

@component('mail::button', ['url' => ''])
    View
@endcomponent

Thanks,<br>
{{ config('app.name') }}
