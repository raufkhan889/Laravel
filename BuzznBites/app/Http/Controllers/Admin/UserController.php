<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();

        return view('admin.user.index', compact('users'));
    }

    public function view($id)
    {
        $user = User::find($id);

        return view('admin.user.view', compact('user'));
    }

    public function destroy(Request $request)
    {
        $user_id = $request->input('user_id');

        $user = User::find($user_id);
        $user->delete();

        return response()->json(['status' => "User deleted Successfully!"]);
    }
}
