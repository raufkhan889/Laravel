<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class AdvisorController extends Controller
{
    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('advisor')->attempt(['email' => $email, 'password' => $password], $request->get('remember'))) {
            return redirect()->route('advisors.dashboard');
        } else {
            session()->flash('error', 'Incorrect Credential');
            return back()->withInput($request->only('email'));
        }
    }

    public function dashboard()
    {
        return view('advisor.dashboard');
    }
}
