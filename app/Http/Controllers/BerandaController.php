<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index(Request $request)
    {
        return view('HalamanDepan.beranda');
    } 
    public function register()
    {
        return view('HalamanAdmin.register');
    }
    // public function penimbangan()
    // {
    //     return view('HalamanUser.penimbangan');
    // }  
    public function dashboard()
    {
        return view('HalamanDepan.dashboard');
    }
}
