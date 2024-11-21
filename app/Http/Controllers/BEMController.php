<?php

namespace App\Http\Controllers;

use App\Models\keanggotaan; // Perbaiki pengimporan model
use Illuminate\Http\Request;

class BEMController extends Controller
{
    public function index()
    {
        return view('admin.keanggotaan');
    }
    
    public function keanggotaan()
    {
        $data = keanggotaan::all(); // Ganti 'keanggotaan' dengan 'keanggotaan'
        return view('admin.keanggotaan', compact('data'));
    }

    public function tambahdatakeanggotaan()
    {
        return view('admin.tambahdata-keanggotaan');
    }
    
    public function admin()
    {
        return view('admin.admin');
    }
    
    public function insertdata(Request $request)
    {   
        // dd($request->all());
        keanggotaan::create($request->all());
        return redirect()->route('keanggotaan');
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
