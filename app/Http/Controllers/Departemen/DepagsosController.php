<?php

namespace App\Http\Controllers\Departemen;

use App\Models\departemen;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DepagsosController extends Controller
{
    public function index()
    {
        $data = departemen::where('nama', 'DEPAGSOS')->get(); 
        $kadep = '';
        $wakadep = '';
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DEPAGSOS')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DEPAGSOS')->first();

        return view('div-BEM.depagsos', compact('data', 'kadep', 'wakadep'));
    }
}
