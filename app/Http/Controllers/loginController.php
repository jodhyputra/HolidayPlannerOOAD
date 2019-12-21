<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class loginController extends Controller
{
	public function login(){
		return view ('layouts.frontend.login');
	}

	public function register(){
		return view('layouts/frontend/register');
	}
    public function loginProcess(Request $request){
	// $credentials = $request->only('email', 'password');

        if (Auth::attempt(['email' => $request->email,
                            'password' => $request->password])) {
            $user = Auth::user();
            Auth::login($user);
            return redirect('/');
        }
        return back()->with('error', 'ababba');
    }

    public function logout(){
        $user = Auth::user()    ;
        Auth::logout($user);
        return redirect('/');
    }

    public function registerProcess(Request $request){
    	$request->validate([
    		'name' => 'required',
    		'email' => 'required|unique:users,email',
    		'password' => 'required|min:6'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);

        Auth::login($user);
    	return redirect('/');

    }
}
