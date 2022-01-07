@extends('layouts.admin-app')

@section('content')
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Order Details</h4>
                        <hr>

                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Quantity</th>
                                    <th>Price</th>
                                    <th>Image</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders->orderItems as $item)
                                    <tr>
                                        <td scope="row">{{ $item->product->name }}</td>
                                        <td>{{ $item->quantity }}</td>
                                        <td>{{ $item->price }}</td>
                                        <td>
                                            <img src="{{ asset('assets/uploads/product/' . $item->product->image) }}"
                                                width="50px" height="50px" alt="">
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <h5>Grand Total <span class="float-end">Rs: {{ $orders->total_price }}</span></h5>

                        <form action="{{ route('admin.orders.update', $orders->id) }}" method="POST"
                            class="mt-3">
                            @csrf
                            @method('PUT')
                            <h6>Update Status</h6>
                            <select class="form-select px-3 border-1" name="status" aria-label="Default select example">
                                <option {{ $orders->status == '0' ? 'selected' : '' }} value="0">Pending</option>
                                <option {{ $orders->status == '1' ? 'selected' : '' }} value="1">Completed</option>

                            </select>
                            <div class="my-3">
                                <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <h4>Shipping Information</h4>
                        <hr>
                        <div class="checkout-form">
                            <div class="row">
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">First Name</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->fname }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Last Name</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->lname }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Email</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->email }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Phone</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->phone }}</div>
                                </div>
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="">Address 1</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->address1 }}</div>
                                </div>
                                <div class="col-md-12 mb-3 form-group">
                                    <label for="">Address 2</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->address2 }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">City</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->city }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">State</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->state }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Country</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->country }}</div>
                                </div>
                                <div class="col-md-6 mb-3 form-group">
                                    <label for="">Pincode</label>
                                    <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $orders->pincode }}</div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
