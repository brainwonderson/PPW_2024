<?php

namespace App\Http\Controllers\Departemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DepsenbudController extends Controller
{
    public function index()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DEPSENBUD')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DEPSENBUD')->first();

        return view('div-BEM.depsenbud', compact('kadep', 'wakadep'));
    }
}
