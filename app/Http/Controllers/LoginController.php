<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Dotenv\Exception\ValidationException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException as ValidationValidationException;

class LoginController extends Controller
{

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(LoginRequest $request)
    {
        if (Auth::attempt($request->only('email', 'password'))){
            return redirect('/')->with('success', 'You are now logged in!');
        }

        throw ValidationValidationException::withMessages([
            'email' => "Your provide credentials doesn't match our record!"
        ]);
    }


}
