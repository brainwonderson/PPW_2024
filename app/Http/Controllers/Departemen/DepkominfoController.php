<?php

namespace App\Http\Controllers\Departemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DepkominfoController extends Controller
{
    public function index()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DEPKOMINFO')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DEPKOMINFO')->first();

        return view('div-BEM.depkominfo', compact('kadep', 'wakadep'));
    }
}
