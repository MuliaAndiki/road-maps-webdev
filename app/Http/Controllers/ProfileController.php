<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    public function index()
    {
        // Assuming the user is logged in
        $user = Auth::user();

        // If you want to fetch a specific user by ID:
        // $user = User::findOrFail($id); // Replace $id with the actual user ID

        return view('profile', compact('user'));
    }
}
