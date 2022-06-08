<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    public function signup(Request $request)
    {
        $request->validate([
            'phone' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:8',

        ]);
        $user = User::create([
            'phone' => $request['phone'],
            'email' => $request['email'],
            'password' => Hash::make($request['password'])
        ]);
        Auth::loginUsingId($user);
        return redirect()->route('signin');

    }

    public function signin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',

        ]);
        
        $credentials = $request->only('email','password');
        if(Auth::attempt($credentials)){
            $user = Auth::user();
            return redirect()->route('landing');
        }
        return redirect('/signup');

    }
}
