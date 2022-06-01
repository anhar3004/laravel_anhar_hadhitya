<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahSakitController extends Controller
{
    public function index ()
    {
        $RumahSakit = \App\Models\RumahSakit::all();
        return view('RumahSakit.dataRumahSakit',['RumahSakit' => $RumahSakit]);
    }

    public function tambah(Request $request)
    {
        \App\Models\RumahSakit::create($request->all());
        return redirect('/dataRumahSakit')->with('sukses','Data berhasil di tambahkan !');

    }

    public function edit($id)
    {
        $RumahSakit = \App\Models\RumahSakit::find($id);
        return view('RumahSakit.edit',['RumahSakit'=> $RumahSakit]);
    }

    public function update(Request $request,$id)
    {
        $RumahSakit = \App\Models\RumahSakit::find($id);
        $RumahSakit->update($request->all());
        return redirect('/dataRumahSakit')->with('sukses','Data berhasil di update !');
    }

    public function delete($id)
    {
        $RumahSakit = \App\Models\RumahSakit::find($id);
        $RumahSakit->delete();
    }
}
