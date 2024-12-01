<?php

namespace App\Http\Controllers;
use App\Models\keanggotaan;

class HomeController extends Controller
{
    public function index(){
        return view('home');
    }
    public function indexes(){
        return view('index');
    }
    public function tes()
    {
        $ketua = keanggotaan::where('jabatan', 'Ketua')->first();
        $wakilKetua = keanggotaan::where('jabatan', 'Wakil Ketua')->first();

        return view('home', compact('ketua', 'wakilKetua'));
    }
}
