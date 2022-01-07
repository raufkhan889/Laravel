@extends('layouts.main-app')

@section('title')
    My Orders
@endsection

@section('content')
    <nav aria-label="breadcrumb py-4">
        <ol class="breadcrumb bg-dark px-5 py-3">
            <li class="breadcrumb-item"><a href="{{ route('home') }}" class="text-white">Home</a></li>
            <li class="breadcrumb-item text-secondary" aria-current="page">Orders</li>
        </ol>
    </nav>


    <div class="container mb-5">
        <h1 class="text-center my-5">My Orders</h1>
        <div class="row">
            <div class="your-order">
                <table class="table your-order-table table-responsive">
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
            </div>
        </div>
    </div>
@endsection
