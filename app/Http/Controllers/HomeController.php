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
        $departemen = keanggotaan::where('departemen', 'BPH INTI')->first();
        $wakilKetua = keanggotaan::where('jabatan', 'Wakil Ketua')->first();

        return view('home', compact('ketua', 'wakilKetua', 'departemen'));
    }
    
    public function diptek()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DIPTEK')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DIPTEK')->first();

        return view('div-BEM.diptek', compact('kadep', 'wakadep'));
    }
}
