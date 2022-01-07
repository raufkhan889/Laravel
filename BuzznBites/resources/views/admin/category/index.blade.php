@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h4>Category</h4>
            <a href="{{ route('admin.category.create') }}" class="btn bg-gradient-primary">Add category</a>
        </div>
        <div class="card-body">
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Status</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr class="card-parent">
                            <td scope="row">{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->status == '1' ? 'Public' : 'Hidden' }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/' . $category->image) }}" style="width: 80px"
                                    alt="category logo">
                            </td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                    class="btn btn-success">Edit</a>
                                <input type="hidden" value="{{ $category->id }}" class="category_id" />

                                <a href="javascript:void()" class="btn btn-danger delete-category-btn">Delete</a>
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
