<?php

namespace App\Http\Controllers;
use App\Models\keanggotaan;
use App\Models\votes;

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
        $departemen = keanggotaan::where('departemen', 'BPH INTI')->first();
        $wakilKetua = keanggotaan::where('jabatan', 'Wakil Ketua')->first();

        return view('home', compact('ketua', 'wakilKetua', 'departemen'));
    }
    
    public function vote()
    {
        $data = votes::all(); 
        return view('menu.vote', compact('data'));
    }
}
