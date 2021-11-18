<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register',
            'active' => 'register',
            'logo' => 'tournee_logo.png'
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required|min:4|max:16|unique:users',
            'name' => 'required|min:4|max:255',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|min:8|max:255'
            // biar mantep 'password' => [ 'required', Password::min(8)->mixedCase()->letters()->numbers()->symbols()->uncompromised()],
        ]);

        $validatedData['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);

        // $request->session()->flash('success', 'Registration success');
        return redirect('login')->with('success', 'Registration success');
    }
}
