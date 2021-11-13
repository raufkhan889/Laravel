@extends('layouts.user-app')

@section('dashboard')
<h1 class="text-center">Manage Products</h1>

<div class="row py-2">
    <div class="col-lg-12">
        <div class="d-flex py-3">
            <div style="flex: 1"><b> Picture </b></div>
            <div style="flex: 1"><b> Title </b></div>
            <div style="flex: 1"><b> Price </b></div>
            <div style="flex: 1"><b> Stock Count </b></div>
            <div style="flex: 2"><b> Actions </b></div>
        </div>
    </div>

    @foreach ($products as $product)

        <div class='col-lg-12'>
            <div class='d-flex py-2 align-items-center border-top'>
                <div style='flex: 1'>
                    <img 
                        src='{{ asset('images/379432_online_shopping_icon.png') }}' 
                        width='60px'>
                </div>
                <div style='flex: 1'>
                    {{ $product->title }}
                </div>
                <div style='flex: 1'>
                    ${{ $product->price }}
                </div>
                <div style='flex: 1'>
                    {{ $product->stock }}x
                </div>
                <div style='flex: 2'>
                    <a href='' class='btn btn-dark'>Show</a>
                    &nbsp;
                    <a href='' class='btn btn-success'>Edit</a>
                    &nbsp;
                    <a href='' class='btn btn-danger'>Delete</a>
                </div>
            </div>
        </div>
        
    @endforeach
</div>

@endsection