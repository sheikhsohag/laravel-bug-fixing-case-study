<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    // shows only users with role = 'admin'
    public function index()
    {
        $admins = User::where('role', 'admin')->get();
        return view('users.index', compact('admins'));
    }

    // admin can view any user's profile
    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('users.profile', compact('user'));
    }

    // authenticated user's own profile
    public function profile()
    {
        $user = Auth::user();
        return view('users.profile', compact('user'));
    }
}
