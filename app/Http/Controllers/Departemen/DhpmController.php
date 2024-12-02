<?php

namespace App\Http\Controllers\Departemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DhpmController extends Controller
{
    public function index()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DHPM')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DHPM')->first();

        return view('div-BEM.dhpm', compact('kadep', 'wakadep'));
    }
}
