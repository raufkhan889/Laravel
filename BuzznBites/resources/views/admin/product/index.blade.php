@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Products</h4>
            <a href="{{ route('admin.product.create') }}" class="btn bg-gradient-primary">Add Product</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr class="card-parent">
                            <td scope="row">{{ $product->id }}</td>
                            <td>{{ $product->category->name }}</td>
                            <td>{{ $product->name }}</td>
                            <td>Rs:{{ $product->selling_price }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/product/' . $product->image) }}" style="width: 80px"
                                    alt="category logo">
                            </td>
                            <td>
                                <a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-success">Edit</a>
                                <input type="hidden" value="{{ $product->id }}" class="product_id" />

                                <a href="javascript:void()" class="btn btn-danger delete-product-btn">Delete</a>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

            <p class="card-text">

            </p>
        </div>
    </div>
@endsection
