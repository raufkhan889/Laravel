@extends('layouts.main-app')

@section('content')
    <div class="upload-details">
        <form action="{{ route('uploads.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col-lg-12">
                    <div class="main-title">
                        <h6>Upload Details</h6>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="imgplace"></div>
                </div>
                <div class="col-lg-10">
                    <div class="osahan-title">Upload your video here...</div>
                    <div class="osahan-size"></div>
                    <div class="osahan-progress">

                        <input type="file" name="video" class="form-control bg-white block my-2 border-0">

                    </div>
                    <div class="osahan-desc">After uploading video will be avaible in "My videos" page.</div>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="col-lg-12">
                    <div class="osahan-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e1">Video Title</label>
                                    <input type="text" name="title" placeholder="Video Title here ..." id="e1"
                                        class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label for="e2">About</label>
                                    <textarea rows="3" id="e2" name="description"
                                        class="form-control">Description</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label for="e3">Privacy Settings</label>
                                    <select id="e3" name="active" class="custom-select">
                                        <option value="0">Public</option>
                                        <option value="1">Private</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-9">
                                <div class="form-group">
                                    <label for="e3">Category</label>
                                    <select id="e3" name="category_id" class="custom-select">
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">
                                                {{ $category->name }}
                                            </option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                        </div>


                    </div>
                    <div class="osahan-area text-center mt-3">
                        <button type="submit" class="btn btn-outline-primary">Upload Now</button>
                    </div>
                    <hr>
                    <div class="terms text-center">
                        <p class="mb-0">There are many variations of passages of Lorem Ipsum available, but the
                            majority <a href="#">Terms of Service</a> and <a href="#">Community Guidelines</a>.</p>
                        <p class="hidden-xs mb-0">Ipsum is therefore always free from repetition, injected humour, or non
                        </p>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <!-- /.container-fluid -->

@endsection
