<?php

namespace App\Http\Controllers\Departemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DepkebdisController extends Controller
{
    public function index()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DEPKEBDIS')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DEPKEBDIS')->first();

        return view('div-BEM.depkebdis', compact('kadep', 'wakadep'));
    }
}
