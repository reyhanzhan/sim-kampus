<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//panggil model BukuModel
use App\Models\UnitModel;

class UnitController extends Controller
{
    //method untuk tampil data unitmodel
    public function index()
    {
        $unit = Unit::all();
        return view ('unit.index')->with('unit', $unit);
    }

    //method untuk tambah data anggota
    public function anggotatambah(Request $request)
    {
        $this->validate($request, [
            'nama_mahasiswa' => 'required',
            'gelar' => 'required',
            'ketua' => 'required',
            'nama_agama' => 'required'
        ]);

        UnitModel::create([
            'nama_mahasiswa'> $request->nim,
            'gelar' => $request->nama_anggota,
            'ketua' => $request->prodi,
            'nama_agama' => $request->hp
        ]);

        return redirect('/unit');
    }

     //method untuk hapus data anggota
     public function anggotahapus($id_anggota)
     {
         $dataanggota=AnggotaModel::find($id_anggota);
         $dataanggota->delete();
 
         return redirect()->back();
     }

     //method untuk edit data anggota
    public function anggotaedit($id_anggota, Request $request)
    {
        $this->validate($request, [
            'nama_mahasiswa' => 'required',
            'gelar' => 'required',
            'ketua' => 'required',
            'Nama_agama' => 'required'
        ]);

        $id_anggota = AnggotaModel::find($id_anggota);
        $id_anggota->nama_mahasiswa   = $request->nama_mahasiswa;
        $id_anggota->gelar     = $request->gelar;
        $id_anggota->ketua  = $request->ketua;
        $id_anggota->nama_agama   = $request->nama_agama;

        $id_anggota->save();

        return redirect()->back();
    }
}