@extends('layouts.admin-app')

@section('content')
    <div class="container ">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>Order History</h4>
                <a href="{{ route('admin.orders') }}" class="btn btn-warning">New Orders</a>
            </div>
            <div class="card-body">
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
                                    <a href="{{ route('admin.orders.view', $item->id) }}"
                                        class="btn btn-dark px-3">View</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
        </div>
    </div>
@endsection
