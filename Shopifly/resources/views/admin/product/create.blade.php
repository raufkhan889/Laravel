@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create New Product</h4>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="container">
                <form action="{{ route('admin.product.store') }}" method="POST" enctype="multipart/form-data"
                    class="text-start">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom ">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" required>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Small Description</label>
                            <textarea name="small_description" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-6 my-3">
                            <label class="form-label">Status</label>
                            <input type="checkbox" name="status">
                        </div>

                        <div class="col-md-6 my-3">
                            <label class="form-label">Trending</label>
                            <input type="checkbox" name="trending">
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Original Price</label>
                            <input type="number" name="original_price" class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Selling Price</label>
                            <input type="number" name="selling_price" class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Quantity</label>
                            <input type="number" name="quantity" class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Tax</label>
                            <input type="number" name="tax" class="form-control" required>
                        </div>

                        <div class="col-md-12 input-group input-group-outline my-3">
                            <select name="category_id" class="form-select px-3" required>
                                <option value="">Select Category</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 border-bottom my-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" name="meta_title" class="form-control" required>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control" required></textarea>
                        </div>

                        <div class="col-md-12 input-group input-group-outline my-3">
                            <input type="file" name="image" class="for-control" required>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Add</button>
                        </div>

                    </div>
                </form>
            </div>
            </p>
        </div>
    </div>
@endsection
