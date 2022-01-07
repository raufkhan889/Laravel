@extends('layouts.admin-app')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Create New Category</h4>
        </div>
        <div class="card-body">
            <p class="card-text">
            <div class="container">
                <form action="{{ route('admin.category.store') }}" method="POST" enctype="multipart/form-data"
                    class="text-start">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 my-3 border-bottom">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class=" form-control " required>
                        </div>

                        <div class="col-md-6 my-3 border-bottom ">
                            <label class="form-label">Slug</label>
                            <input type="text" name="slug" class="form-control" required>
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
                            <label class="form-label">Popular</label>
                            <input type="checkbox" name="popular">
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
