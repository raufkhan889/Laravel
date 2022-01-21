<?php

namespace App\Http\Controllers;

use App\Models\Car;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $cars = Car::all();
        return Inertia::render('Cars/Index', ['cars' => $cars]);
    }

    public function create()
    {
        return Inertia::render('Cars/Create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'founded' => 'required|date'
        ]);

        $car = Car::create([
            'name' => $request->input('name'),
            'founded' => $request->input('founded'),
            'description' => $request->input('description'),
            'user_id' => Auth::user()->id
        ]);

        return redirect()->route('cars');
    }

    public function show($id)
    {
        $car = Car::find($id);

        return Inertia::render('Cars/Show', [
            'car' => $car
        ]);
    }

    public function edit($id)
    {
        $car = Car::find($id);

        return Inertia::render('Cars/Edit', [
            'car' => $car
        ]);
    }

    public function update(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'founded' => 'required|date'
        ]);

        $car = Car::where('id', $request->input('id'))->update([
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'founded' => $request->input('founded')
        ]);

        return redirect()->route('cars');
    }

    public function destroy($id)
    {
        $car = Car::find($id);
        $car->delete();

        return back();
    }
}
