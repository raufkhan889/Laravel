@extends('layouts.app')

@section('content')

    <div class="container">

        <h1>Shop Request Form</h1>

        <form action="{{ route('shops.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="control-label">Shop Name</label>
                <input type="text" name="name" class="form-control" id="name">
            </div>

            <div class="form-group">
                <label for="description" class="control-label">Shop Name</label>
                <textarea name="description" class="form-control" id="description" cols="30" rows="3"></textarea>
            </div>

            <div>
                <input type="submit" value="Submit" class="btn btn-dark">
            </div>
        </form>

    </div>

@endsection
