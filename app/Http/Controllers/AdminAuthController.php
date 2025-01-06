<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Admin;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminAuthController extends Controller
{
    public function showSignUpForm()
    {
        return view('admins.signup');
    }

    public function showSignInForm()
    {
        return view('admins.signin');
    }
    public function signUp(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:admins',
            'password' => 'required|string|min:8',
        ]);

        try {
            Admin::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);

            return redirect('/admin/signin')->with('success', 'Account created successfully. Please sign in.');
        } catch (\Illuminate\Database\QueryException $e) {

            return back()->withErrors([
                'error' => 'A database error occurred. Please try again later.',
            ])->withInput();
        } catch (\Exception $e) {

            return back()->withErrors([
                'error' => 'An unexpected error occurred. Please try again later.',
            ])->withInput();
        }
    }



    public function signIn(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect()->intended('/admin/users');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function signOut()
    {
        Auth::guard('admin')->logout();

        return redirect('/admin/signin');
    }
}
