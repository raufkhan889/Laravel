<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Models\Student;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('dashboard.dashboard');
    }

    public function createApply(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required',
            'domain' => 'required'
        ]);

        $name = $request->name;
        Student::create([
            'name' => $request->name,
            'email' => $request->email,
            'domain' => $request->domain,
            'dept' => $request->dept
        ]);

        return redirect()->route('dashboard.title')->with('name', $name);
    }

    public function apply()
    {
        return view('dashboard.apply');
    }

    public function title()
    {
        return view('dashboard.title');
    }

    public function createTitle(Request $request)
    {
        $this->validate($request, [
            'title' => 'required'
        ]);

        // $name = $request->name;

        // $student = Student::where('name', $name)
        //     ->update([
        //         'title' => $request
        //     ]);

        return redirect()->route('dashboard.advisor');
    }

    public function advisor()
    {
        return view('dashboard.advisor');
    }
}
