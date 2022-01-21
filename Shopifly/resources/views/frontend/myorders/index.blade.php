@extends('layouts.front-app')

@section('title')
    Order Details
@endsection

@section('content')
    <div class="py-3 mb-4 shadow-sm bg-warning border-top">
        <div class="container">
            <h6 class="mb-0">
                <a href="{{ route('home') }}" class="a-rem-style">Home</a>
                /
                <a href="{{ route('orders') }}" class="a-rem-style">My Orders</a>
            </h6>
        </div>
    </div>
    <div class="container my-5">
        <div class="card">
            <div class="card-header">
                Your Orders Details
            </div>
            <div class="card-body">
                <p class="card-text">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>Tracking No.</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Placed on</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($orders as $item)
                            <tr>
                                <td scope="row">{{ $item->tracking_no }}</td>
                                <td>Rs: {{ $item->total_price }}</td>
                                <td>{{ $item->status == '0' ? 'Pending' : 'Completed' }}</td>
                                <td>{{ date('d-m-Y', strtotime($item->created_at)) }}</td>
                                <td>
                                    <a href="{{ route('orders.view', $item->id) }}" class="btn btn-dark px-3">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

                </p>
            </div>
        </div>
    </div>
@endsection
