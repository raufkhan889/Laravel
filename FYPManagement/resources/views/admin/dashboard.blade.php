@extends('layouts.admin-app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Manage {{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item"><a href="">Manage Staff</a></li>
                            <li class="list-group-item"><a href="">Add Staff</a></li>
                            <li class="list-group-item disabled">More coming soon</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Admin {{ __('Dashboard') }}</div>

                    <div class="card-body">

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
