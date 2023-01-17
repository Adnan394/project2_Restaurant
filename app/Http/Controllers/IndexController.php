<?php


    // Nama : Muhammad Rifqi Lutfi
    // NIM  : 2440040412 
    

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index() {
        return view('home',[
            
            "title" => "Selamat datang di perusahaan kami",
        ]);
    }
}