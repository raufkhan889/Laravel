@extends('layouts.app')

@section('content')
    <div class="container py-4">
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">Manage {{ __('Dashboard') }}</div>

                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <a href="{{ route('dashboard.apply') }}">Apply for Project</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('dashboard.title') }}">Select Title</a>
                            </li>
                            <li class="list-group-item">
                                <a href="{{ route('dashboard.advisor') }}"> Advior Allocation </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Student {{ __('Dashboard') }}</div>

                    <div class="card-body" style="min-height: 450px">
                        @yield('user-dashboard')
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
