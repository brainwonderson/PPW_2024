<?php

namespace App\Http\Controllers;

use App\Models\keanggotaan; 
use App\Models\departemen; 
use App\Models\ukm; 
use Illuminate\Http\Request;

class BEMController extends Controller
{
    public function index()
    {
        return view('admin.keanggotaan');
    }
    
    public function keanggotaan()
    {
        $data = keanggotaan::all(); 
        return view('admin.keanggotaan', compact('data'));
    }
    
    public function departemen()
    {
        $data = departemen::all(); 
        return view('admin.departemen', compact('data'));
    } 
    
    public function ukm()
    {
        $data = ukm::all(); 
        return view('admin.ukm', compact('data'));
    }

    public function tambahdatakeanggotaan()
    {
        return view('admin.tambahdata.+keanggotaan');
    }
    
    public function tambahdataukm()
    {
        return view('admin.tambahdata.+ukm');
    }
    
    public function tambahdatadepartemen()
    {
        return view('admin.tambahdata.+departemen');
    }
    
    public function admin()
    {
        return view('admin.admin');
    }
    
    public function insertdatakeanggotaan(Request $request)
    {   
        // dd($request->all());
        keanggotaan::create($request->all());
        return redirect()->route('keanggotaan');
    }
    
    public function insertdatadepartemen(Request $request)
    {   
        // dd($request->all());
        departemen::create($request->all());
        return redirect()->route('departemen');
    }
    
    public function insertdataukm(Request $request)
    {   
        // dd($request->all());
        ukm::create($request->all());
        return redirect()->route('ukm');
    }

    public function tampilkandata($id)
    {
        $data = keanggotaan::find($id);
        return view('admin.tampilkandata', compact('data'));
    }
    
    public function updatedata(Request $request, $id)
    {
        $data = keanggotaan::find($id);
        $data->update($request->all());
        return redirect()->route('keanggotaan')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $data = keanggotaan::find($id);
        $data->delete();
        return redirect()->route('keanggotaan')->with('success', 'Data berhasil dihapus');
    }

}
