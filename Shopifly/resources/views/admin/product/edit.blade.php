@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Update Product</h4>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="container">
                <form action="{{ route('admin.product.update', $product->id) }}" method="POST"
                    enctype="multipart/form-data" class="text-start">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Name</label>
                            <input type="text" value="{{ $product->name }}" name="name" class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom ">
                            <label class="form-label">Slug</label>
                            <input type="text" value="{{ $product->slug }}" name="slug" class="form-control" required>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Small Description</label>
                            <textarea name="small_description" rows="3" class="form-control"
                                required>{{ $product->small_description }}</textarea>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Description</label>
                            <textarea name="description" rows="3" class="form-control"
                                required>{{ $product->description }}</textarea>
                        </div>

                        <div class="col-md-6 my-3">
                            <label class="form-label">Status</label>
                            <input type="checkbox" {{ $product->status ? 'checked' : '' }} name="status">
                        </div>

                        <div class="col-md-6 my-3">
                            <label class="form-label">Trending</label>
                            <input type="checkbox" {{ $product->trending ? 'checked' : '' }} name="trending">
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Original Price</label>
                            <input type="number" value="{{ $product->original_price }}" name="original_price"
                                class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Selling Price</label>
                            <input type="number" value="{{ $product->selling_price }}" name="selling_price"
                                class="form-control" required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Quantity</label>
                            <input type="number" value="{{ $product->quantity }}" name="quantity" class="form-control"
                                required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Tax</label>
                            <input type="number" value="{{ $product->tax }}" name="tax" class="form-control" required>
                        </div>

                        <div class="col-md-12 input-group input-group-outline my-3">
                            <select name="category_id" class="form-select px-3" required>
                                <option value="{{ $product->category->id }}">{{ $product->category->name }}</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}">{{ $category->name }}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-md-6 border-bottom my-3">
                            <label class="form-label">Meta Title</label>
                            <input type="text" value="{{ $product->meta_title }}" name="meta_title"
                                class="form-control" required>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Meta Keywords</label>
                            <textarea name="meta_keywords" rows="3" class="form-control"
                                required>{{ $product->meta_keywords }}</textarea>
                        </div>

                        <div class="col-md-12 border-bottom my-3">
                            <label class="form-label">Meta Description</label>
                            <textarea name="meta_description" rows="3" class="form-control"
                                required>{{ $product->description }}</textarea>
                        </div>

                        @if ($product->image)
                            <img src="{{ asset('assets/uploads/product/' . $product->image) }}" alt="Product Image"
                                style="width: 80px;">
                        @endif
                        <div class="col-md-12 input-group input-group-outline my-3">
                            <input type="file" name="image" class="for-control">
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Update</button>
                        </div>

                    </div>
                </form>
            </div>
            </p>
        </div>
    </div>
@endsection
