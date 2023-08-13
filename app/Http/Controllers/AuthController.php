<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.auth.login');
    }
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $data = $request->only('email', 'password');

        if (Auth::attempt($data)) {
            return redirect()->route('todolist.index')->with('success', 'Berhasil Login');
        } else {
            return redirect()->back()->withInput()->withErrors(['email' => 'Email atau password salah']);
        }
    }

    public function logout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('signin');
    }
}
