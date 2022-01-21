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
                        <th>Description</th>
                        <th>Image</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($categories as $category)
                        <tr>
                            <td scope="row">{{ $category->id }}</td>
                            <td>{{ $category->name }}</td>
                            <td>{{ $category->description }}</td>
                            <td>
                                <img src="{{ asset('assets/uploads/category/' . $category->image) }}" style="width: 80px"
                                    alt="category logo">
                            </td>
                            <td>
                                <a href="{{ route('admin.category.edit', $category->id) }}"
                                    class="btn btn-success">Edit</a>
                                <a href="{{ route('admin.category.destroy', $category->id) }}"
                                    class="btn btn-danger">Delete</a>
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
