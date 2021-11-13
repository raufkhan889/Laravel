@extends('layouts.user-app')

@section('dashboard')
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    {{ __('You are logged in as an User!') }}
@endsection