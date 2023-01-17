<?php

    // Nama : Muhammad Rifqi Lutfi
    // NIM  : 2440040412 

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    //

    public function index() {
        return view('daftar',[
            "title" => "Register | Login"
        ]);
    }
}