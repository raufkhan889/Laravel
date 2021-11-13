@extends('layouts.user-app')

@section('dashboard')
    <h1 class="text-center">Search Products</h1>

    <form class="d-flex my-4">
        <input class="form-control me-2" type="search" placeholder="Search Product..." aria-label="Search">
        <button class="btn btn-outline-dark px-5" type="submit">Search</button>
    </form>
@endsection