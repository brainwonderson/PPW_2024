<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthManager extends Controller
{
    public function login()
    {
        return view('menu.login');
    }

    public function register()
    {
        return view('menu.register');
    }

    public function loginPost(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Redirect based on user role
            if (Auth::user()->role == 'admin') {
                return redirect()->route('admin'); // Use named route for better maintainability
            }
            return redirect()->route('home'); // Use named route for better maintainability
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    function registerPost(Request $request){
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $data['name'] = $request->name;
        $data['email'] = $request->email;
        $data['password'] = Hash::make($request->password);
        $user = User::create($data);
        if(!$user){
            return redirect(route('register'))->with("error","Registeration failed, Try Again!");
        }
        return redirect(route('login'))->with("succes","Registeration succesfull");
    }

    public function logout()
    {
        Auth::logout(); 
        Session::flush();
        return redirect()->route('login'); 
    }
    // public function logout(): RedirectResponse
    // {
    //     Auth::logout();
    //     Session::flush();
    //     return redirect(route(login))->with('message', 'You have been logged out successfully!');
    // }
}