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

    public function admin()
    {
        return view('admin.admin'); 
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
        return view('admin.tambahdata.keanggotaan'); 
    }
    
    public function tambahdataukm()
    {
        return view('admin.tambahdata.ukm'); 
    }
    
    public function tambahdatavote()
    {
        return view('admin.tambahdata.+vote');
    }

    public function tambahdatadepartemen()
    {
        return view('admin.tambahdata.departemen'); 
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
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'ketua' => 'required|string',
            'wakilketua' => 'required|string',
        ]);

        $path = null;
        if($request->hasFile('logo') == null) {
            $path = ''; 
        } else {
            $path = time() . '.' . $request->logo->getClientOriginalExtension(); 
            $request->logo->move(public_path('bem'), $path);
        }

        departemen::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'ketua' => $request->input('ketua'),
            'wakilketua' => $request->input('wakilketua'),
            'logo' => $path, 
        ]);
        return redirect()->route('departemen')->with('success', 'Data has been added successfully!');
    }
    
    public function insertukm(Request $request)
    {
        $request->validate([
            'nama' => 'required|string',
            'deskripsi' => 'required|string',
            'programkerja' => 'required|string',
            'ketua' => 'required|string',
        ]);

        ukm::create([
            'nama' => $request->input('nama'),
            'deskripsi' => $request->input('deskripsi'),
            'programkerja' => $request->input('programkerja'),
            'ketua' => $request->input('ketua'),
        ]);
        return redirect()->route('ukm')->with('success', 'Data has been added successfully!');
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

    public function delete_keanggotaan($id)
    {
        $data = keanggotaan::find($id);
        $data->delete();
        return redirect()->route('keanggotaan')->with('success', 'Data berhasil dihapus');
    }
    
    public function delete_vote($id)
    {
        $data = votes::find($id);
        $data->delete();
        return redirect()->route('vote')->with('success', 'Data berhasil dihapus');
    }
    
    public function delete_departemen($id)
    {
        $data = departemen::find($id);
        $data->delete();
        return redirect()->route('departemen')->with('success', 'Data berhasil dihapus');
    }
    
    public function delete_ukm($id)
    {
        $data = ukm::find($id);
        $data->delete();
        return redirect()->route('ukm')->with('success', 'Data berhasil dihapus');
    }

    public function openSession()
    {
        // Mengaktifkan semua kandidat
        DB::table('candidates')->update(['is_active' => true]);

        return redirect('/admin/vote')->with('success', 'Session has been opened. All candidates are now visible.');
    }


}
