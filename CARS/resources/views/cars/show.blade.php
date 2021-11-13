@extends('layouts.app')

@section('content')
<div class="m-auto w-4/5 py-10">
    <div class="text-center">
        <img 
            src="{{ asset('images/' . $car->image_path) }}" 
            class="w-6/12 mb-6 mx-auto" 
            alt="">
        <h1 class="text-5xl uppercase bold">
            {{ $car->name }}
        </h1>
        {{-- <p class="text-lg text-gray-700 pt-6">
            {{ $car->headquarters->headquarters }}, {{ $car->headquarters->country }}
        </p> --}}
    </div>

    <div class="text-center py-10">
        <div class="m-auto">

            <span class="uppercase text-blue-500 font-bold text-xs italic">
                Founded: {{ $car->founded }}
            </span>

            <p class="text-lg text-gray-700 py-6">
                {{ $car->description }}
            </p>

            <table class="table-auto my-4 mx-auto">
                <tr class="bg-blue-100">
                    <th class="w-1/4 border-4 border-gray-500">
                        Model
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Engine
                    </th>
                    <th class="w-1/4 border-4 border-gray-500">
                        Date
                    </th>
                </tr>

                @forelse ($car->carModels as $model)
                <tr>
                    <td class="border-4 border-gray-500">
                        {{ $model->model_name }}
                    </td>
                    <td class="border-4 border-gray-500">
                        @foreach ($car->engines as $engine)

                            @if ($model->id == $engine->model_id)
                            {{ $engine->engine_name }},
                            @endif

                        @endforeach
                    </td>

                    <td class="border-4 border-gray-500">
                        {{ date('d-m-Y', strtotime($car->carProductionDate->created_at)) }}
                    </td>
                </tr>
                @empty
                <p>
                    No cars model found!
                </p>
                @endforelse
            </table>

            <p class="block text-left py-3 italic text-gray-600 text-center">
                Product Types:
                @forelse ($car->products as $product)
                    {{ $product->name }},
                @empty
                    Not Product type found!
                @endforelse
            </p>

            <hr class="mt-4 mb-8">
        </div>
    </div>
</div>
@endsection