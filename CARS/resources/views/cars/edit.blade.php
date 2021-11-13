@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-10">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Update car</h1>
    </div>

    <div class="flex justify-center pt-20">
        <form action="/cars/{{ $car->id }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="block">
                <input 
                type="file"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                name="image">
            </div>

            <div class="block">
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                name="name"
                value="{{ $car->name }}">
            </div>

            <div class="block">
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                name="founded"
                value="{{ $car->founded }}">
            </div>

            <div class="block">
                <input 
                type="text"
                class="block shadow-5xl mb-10 p-2 w-80 italic placeholder-gray-500"
                name="description"
                value="{{ $car->description }}">
            </div>

            <button 
            type="submit"
            class="block bg-green-500 shadow-5xl mb-10 p-2 w-80 font-bold uppercase text-white">
                Submit
            </button>

            <div class="block">
                @if ($errors->any())
                    @foreach ($errors->all() as $error)
                        <li class="text-red-500 list-none text-center">
                            {{ $error }}
                        </li>
                    @endforeach
                @endif
            </div>
        </form>
    </div>

</div>
@endsection