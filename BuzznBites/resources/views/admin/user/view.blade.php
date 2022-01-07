@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-header d-flex justify-content-between">
                <h4>User Details</h4>
                <a href="{{ route('admin.users') }}" class="btn btn-warning">Back</a>
            </div>
            <div class="card-body">
                <div class="checkout-form">
                    <div class="row">
                        <div class="col-md-12 mb-3 form-group">
                            <label for="">Role</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">
                                {{ $user->role_as == '0' ? 'User' : 'Admin' }}
                            </div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">First Name</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->fname }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">Last Name</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->lname }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">Email</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->email }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">Phone</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->phone }}</div>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <label for="">Address 1</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->address1 }}</div>
                        </div>
                        <div class="col-md-12 mb-3 form-group">
                            <label for="">Address 2</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->address2 }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">City</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->city }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">State</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->state }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">Country</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->country }}</div>
                        </div>
                        <div class="col-md-6 mb-3 form-group">
                            <label for="">Pincode</label>
                            <div class="form-control bg-opacity-25 bg-gray-200 p-2">{{ $user->pincode }}</div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
