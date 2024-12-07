<?php

namespace App\Http\Controllers;

use App\Models\keanggotaan; 
use App\Models\departemen; 
use App\Models\ukm; 
use App\Models\votes; 
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
    
    public function vote()
    {
        $data_vote = votes::all(); 
        return view('admin.vote', compact('data_vote'));
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
    
    public function tambahdatavote()
    {
        return view('admin.tambahdata.+vote');
    }

    public function tambahdatadepartemen()
    {
        return view('admin.tambahdata.+departemen');
    }
    
    public function admin()
    {
        return view('admin.admin');
    }
    
    public function store(Request $request)
    {   
        keanggotaan::create($request->all());
        return redirect()->route('keanggotaan');
    }
    
    public function addvote(Request $request)
    {   
        votes::create($request->all());
        return redirect()->route('vote');
    }
    
    public function insertdatakeanggotaan(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'departemen' => 'required|string',
            'jabatan' => 'required|string',
            // 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $path = null;
        if($request->hasFile('foto') == null) {
            $path = ''; 
        } else {
            $path = time() . '.' . $request->foto->getClientOriginalExtension(); 
            $request->foto->move(public_path('bem'), $path);
        }

        keanggotaan::create([
            'nama' => $request->input('nama'),
            'departemen' => $request->input('departemen'),
            'jabatan' => $request->input('jabatan'),
            'foto' => $path, 
        ]);
        return redirect()->route('keanggotaan')->with('success', 'Data has been added successfully!');
    }
    
    public function insertdatavote(Request $request)
    {
        $request->validate([
            'nomor_kandidat' => 'required|string',
            'nama_kandidat' => 'required|string',
            // 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $path = null;
        if($request->hasFile('foto_kandidat') == null) {
            $path = ''; 
        } else {
            $path = time() . '.' . $request->foto_kandidat->getClientOriginalExtension(); 
            $request->foto_kandidat->move(public_path('bem'), $path);
        }

        votes::create([
            'nomor_kandidat' => $request->input('nomor_kandidat'),
            'nama_kandidat' => $request->input('nama_kandidat'),
            'foto_kandidat' => $path, 
        ]);
        return redirect()->route('vote')->with('success', 'Data has been added successfully!');
    }
    
    public function insertdatadepartemen(Request $request)
    {   
        departemen::create($request->all());
        return redirect()->route('departemen');
    }
    
    public function insertdataukm(Request $request)
    {   
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
        
        $request->validate([
            'nama' => 'required|string|max:255',
            'departemen' => 'required|string',
            'jabatan' => 'required|string',
            // 'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048', 
        ]);

        $updateData = [
            'nama' => $request->input('nama'),
            'departemen' => $request->input('departemen'),
            'jabatan' => $request->input('jabatan'),
        ];

        if ($request->hasFile('foto')) {
            if ($data->foto) {
                $oldFilePath = public_path('bem/' . $data->foto);
                if (file_exists($oldFilePath)) {
                    unlink($oldFilePath); 
                }
            }

            $path = time() . '.' . $request->foto->getClientOriginalExtension();
            $request->foto->move(public_path('bem'), $path);
            $updateData['foto'] = $path; 
        }

        $data->update($updateData);

        return redirect()->route('keanggotaan')->with('success', 'Data berhasil diubah');
    }

    public function delete($id)
    {
        $data = keanggotaan::find($id);
        $data->delete();
        return redirect()->route('keanggotaan')->with('success', 'Data berhasil dihapus');
    }

}
