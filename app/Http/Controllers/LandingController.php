<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    public function index(Request $request) {

        if ($request->session()->has('token')) {
            return redirect('/dashboard');
        }
        
        return view('landing', [
            'title' => 'Genewisa'
        ]);
    }

    public function login(Request $request) {

        if ($request->session()->has('token')) {
            return redirect('/dashboard');
        }
        
        return view('login', [
            'title' => 'Login Page'
        ]);
    }
}
