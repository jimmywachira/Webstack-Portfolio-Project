<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;

class RegisteredUserController extends Controller
{
    /**
     * Display a listing of the resource.
     */

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        #dd($request->all());
        $attributes = request()->validate([
            'name' => ['required'],
            'email' => ['required', 'email', 'unique:users,email'],
            'password' => ['required', Password::min(6), 'confirmed'],
            'name' => ['required'],
            // 'logo' => ['required', File::types('png', 'jpg', 'jpeg', 'gif', 'webp')->max(1024)]
        ]);

        $user = User::create([
            'name' => $attributes['name'],
            'email' => $attributes['email'],
            'password' => bcrypt($attributes['password']),
        ]);

        // $logoPath = $request->file('logo')->store('logos');

        $user->employer()->create([
            'name' => $attributes['name'],
            // 'logo' => $logoPath
        ]);

        Auth::login($user);

        return redirect('/');
    }
} 