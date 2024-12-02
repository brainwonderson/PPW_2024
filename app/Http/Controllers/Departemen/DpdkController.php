<?php

namespace App\Http\Controllers\Departemen;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\keanggotaan;

class DpdkController extends Controller
{
    public function index()
    {
        $kadep = keanggotaan::where('jabatan', 'Ketua')->where('departemen', 'DPDK')->first();
        $wakadep = keanggotaan::where('jabatan', 'Wakil Ketua')->where('departemen', 'DPDK')->first();

        return view('div-BEM.dpdk', compact('kadep', 'wakadep'));
    }
}
