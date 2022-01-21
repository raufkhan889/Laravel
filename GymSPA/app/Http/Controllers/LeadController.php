<?php

namespace App\Http\Controllers;

use App\Models\Lead;
use Inertia\Inertia;
use Illuminate\Http\Request;
use Faker\Provider\ar_JO\Internet;
use Illuminate\Support\Facades\Auth;

class LeadController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $leads = Lead::query()
            ->where('branch_id', 1)
            ->orderByDesc('id')
            ->get();

        return Inertia::render('Leads/Index', [
            'leads' => $leads
        ]);
    }

    public function create()
    {
        return Inertia::render('Leads/create');
    }

    public function store(Request $request)
    {
        $leadData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'phone' => 'required',
            'dob' => 'required|date',
            'package' => 'required'
        ]);

        Lead::create([
            'name' => $leadData['name'],
            'email' => $leadData['email'],
            'age' => $leadData['age'],
            'phone' => $leadData['phone'],
            'dob' => $leadData['dob'],
            'package' => $leadData['package'],
            'added_by' => Auth::user()->id,
            'branch_id' => 1
        ]);

        return redirect()->route('leads');
    }

    public function show(Lead $lead)
    {
        // $lead->load(['reminders']);

        // dd($lead);

        return Inertia::render('Leads/leadView', [
            'leadProp' => $lead
        ]);
    }

    public function update(Request $request)
    {
        $leadData = $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'age' => 'required|integer',
            'phone' => 'required',
            'dob' => 'required|date',
            'package' => 'required'
        ]);

        $lead = Lead::where('id', $request['id'])->update($leadData);

        return redirect()->route('leads.view', $request['id']);
    }
}
