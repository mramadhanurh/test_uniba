<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        $mahasiswas = Mahasiswa::latest()->paginate(10);
        return view('mahasiswa.index', compact('mahasiswas'));
    }

    public function create()
    {
        return view('mahasiswa.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'nim'     => 'required',
            'nama_mhs'   => 'required',
            'tempat_lahir'   => 'required',
            'tgl_lahir'   => 'required',
            'alamat'   => 'required',
        ]);

        $mahasiswas = Mahasiswa::create([
            'nim'     => $request->nim,
            'nama_mhs'   => $request->nama_mhs,
            'tempat_lahir'   => $request->tempat_lahir,
            'tgl_lahir'   => $request->tgl_lahir,
            'alamat'   => $request->alamat,
        ]);

        if($mahasiswas){
            //redirect dengan pesan sukses
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Disimpan!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Disimpan!']);
        }
    }

    public function edit(Mahasiswa $mahasiswa)
    {
        return view('mahasiswa.edit', compact('mahasiswa'));
    }

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $this->validate($request, [
            'nim'     => 'required',
            'nama_mhs'   => 'required',
            'tempat_lahir'   => 'required',
            'tgl_lahir'   => 'required',
            'alamat'   => 'required',
        ]);

        //get data Mahasiswa by ID
        $mahasiswa = Mahasiswa::findOrFail($mahasiswa->id);

        $mahasiswa->update([
            'nim'     => $request->nim,
            'nama_mhs'   => $request->nama_mhs,
            'tempat_lahir'   => $request->tempat_lahir,
            'tgl_lahir'   => $request->tgl_lahir,
            'alamat'   => $request->alamat,
        ]);

        if($mahasiswa){
            //redirect dengan pesan sukses
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Diupdate!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Diupdate!']);
        }
    }

    public function show(Mahasiswa $mahasiswa)
    {
        $mahasiswas = Mahasiswa::with('prodi')->where('id', $mahasiswa->id)->get();
        return view('mahasiswa.show', compact('mahasiswa', 'mahasiswas'));
        
    }

    public function destroy($id)
    {
        $mahasiswa = Mahasiswa::findOrFail($id);
        $mahasiswa->delete();

        if($mahasiswa){
            //redirect dengan pesan sukses
            return redirect()->route('mahasiswa.index')->with(['success' => 'Data Berhasil Dihapus!']);
        }else{
            //redirect dengan pesan error
            return redirect()->route('mahasiswa.index')->with(['error' => 'Data Gagal Dihapus!']);
        }
    }
}
