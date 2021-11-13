<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function login()
    {
        return view("admin.login");
    }

    public function authenticate(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $email = $request->email;
        $password = $request->password;

        if (Auth::guard('admin')->attempt(['email' => $email, 'password' => $password], $request->get('remember'))) {
            return redirect()->route('admin.dashboard');
        } else {
            session()->flash('error', 'Incorrect Credential');
            return back()->withInput($request->only('email'));
        }
    }

    public function logoutAdmin()
    {
        Auth::guard('admin')->logout();
        return redirect()->route('admin.login');
    }
}
