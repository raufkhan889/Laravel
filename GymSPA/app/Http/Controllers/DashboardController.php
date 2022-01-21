<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Inertia\Inertia;

class DashboardController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $data = [
            'fname' => 'Rauf',
            'lname' => 'Khan'
        ];

        return Inertia::render('Dashboard/Index', $data);
    }
}
