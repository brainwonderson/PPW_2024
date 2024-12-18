<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use App\Models\keanggotaan;
use App\Models\departemen;
use App\Models\ukm;
use App\Models\votes;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function dashboard()
    {
        $jumlahAnggota = keanggotaan::count();
        $jumlahDepartemen = departemen::count();
        $jumlahUKM = ukm::count();
        $jumlahVotes = votes::sum('jumlah_vote'); // Total semua vote kandidat

        return view('admin.admin', compact('jumlahAnggota', 'jumlahDepartemen', 'jumlahUKM', 'jumlahVotes'));
    }

}
