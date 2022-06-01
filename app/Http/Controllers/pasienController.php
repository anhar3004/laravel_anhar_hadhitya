<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pasienController extends Controller
{
    public function index ()
    {
        $pasien = \App\Models\pasien::all();
        $RumahSakit = \App\Models\RumahSakit::all();
        return view('pasien.datapasien',['pasien' => $pasien,'RumahSakit' => $RumahSakit]);
    }

    public function tampil ()
    {
        $RumahSakit = \App\Models\RumahSakit::all();
        return  response()->json($RumahSakit);


    }

    public function tambah(Request $request)
    {
        \App\Models\pasien::create($request->all());
        return redirect('/dataPasien')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $pasien = \App\Models\pasien::find($id);
        $RumahSakit = \App\Models\RumahSakit::all();
        return view('pasien.edit',['pasien'=> $pasien,'RumahSakit'=> $RumahSakit]);
    }

    public function update(Request $request,$id)
    {
        $pasien = \App\Models\pasien::find($id);
        $pasien->update($request->all());
        return redirect('/dataPasien')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $pasien = \App\Models\pasien::find($id);
        $pasien->delete();
    }
}
