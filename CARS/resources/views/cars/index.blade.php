@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-10">
    <div class="text-center">
        <h1 class="text-5xl uppercase bold">Cars</h1>
    </div>

    @if (Auth::user())
        <div class="pt-10">
            <a 
            class="border-b-2 pb-2 border-dotted italic text-gray-500"
            href="/cars/create">
                Add a new Car &rarr;
            </a>
        </div>
    @else
        <div class="pt-10">
            <span class="border-b-2 pb-2 border-dotted italic text-gray-500">
                Please Login first, to add a car 
            </span>
        </div>
    @endif

    <div class="w-5/6 py-10">
        @foreach ($cars as $car)
        <div class="m-auto">
            
            @if (isset(Auth::user()->id) && Auth::user()->id == $car->user_id)
                <div class="float-right">
                    <a 
                    class="border-b-2 pb-2 border-dotted italic text-green-500"
                    href="/cars/{{ $car->id }}/edit">
                        Edit &rarr;
                    </a>
                
                    <form action="/cars/{{ $car->id }}" method="POST">
                        @csrf
                        @method('delete')
                        <button
                            type="submit"
                            class="focus:outline-none mt-5 border-b-2 pb-2 border-dotted italic text-red-500">
                            Delete &rarr;
                        </button>
                    </form>
                </div>
            @endif
            
            <a 
                class=""
                href="/cars/{{ $car->id }}">
                <img 
                    src="{{ asset('images/' . $car->image_path) }}" 
                    class="py-5" 
                    width="150" 
                    alt="">
            </a>
            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>

            <h2 class="text-5xl text-gray-700 hover:text-gray-500">
                <a 
                    class=""
                    href="/cars/{{ $car->id }}">
                    {{ $car->name }}
                </a>
            </h2>

            <p class="text-lg text-gray-700 py-6 pr-10 leading-6">
                {{ $car->description }}
            </p>

            <hr class="mt-4 mb-8">
        </div>
        @endforeach
    </div>
    {{ $cars->links() }}
</div>
@endsection