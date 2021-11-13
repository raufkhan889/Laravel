@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-4">
            <div class="card">
                <div class="card-header">Manage {{ __('Dashboard') }}</div>

                <div class="card-body">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('dashboard.manage') }}">Manage Products</a>  
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('dashboard.create') }}">Add Product</a>  
                        </li><li class="list-group-item">
                            <a href="{{ route('dashboard.search') }}">Search...</a>  
                        </li>
                      </ul>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">User {{ __('Dashboard') }}</div>

                <div class="card-body" style="min-height: 450px">
                    @yield('dashboard')
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
