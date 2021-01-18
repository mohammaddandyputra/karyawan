<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Karyawan;

class KaryawanController extends Controller
{ 
    public function home(){
        return view('create');
    }

    public function store(Request $request){
        Karyawan::create([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'keahlian' => $request->keahlian
        ]);

        return redirect('karyawans');
    }

    public function viewKaryawans(){
        $karyawans = Karyawan::all();
        return view('karyawans', compact('karyawans'));
    }

    public function edit($nik){
        $karyawans = Karyawan::where('nik', $nik)->first();
        return view('edit', compact('karyawans'));
    }

    public function update(Request $request, $nik){
        Karyawan::where('nik', $nik)->update([
            'nama_karyawan' => $request->nama_karyawan,
            'alamat' => $request->alamat,
            'email' => $request->email,
            'tempat_lahir' => $request->tempat_lahir,
            'tanggal_lahir' => $request->tanggal_lahir,
            'gender' => $request->gender,
            'keahlian' => $request->keahlian
        ]);
        return redirect('karyawans');
    }

    public function delete($nik){
        Karyawan::destroy($nik);
        return back();
    }
}
