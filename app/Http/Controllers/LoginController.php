<?php

    // Nama : Muhammad Rifqi Lutfi
    // NIM  : 2440040412 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //

    public function index() {
        return view('login', [
            "title" => "Login | Register"
        ]);
    }
}