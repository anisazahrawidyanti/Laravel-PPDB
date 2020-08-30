<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Calonsiswa;

class CalonsiswaController extends Controller
{
    public function index(){
        $csb = Calonsiswa::all();
        return view('data-cpdb',['calonsiswa'=>$csb]);
    }
    public function show($calonsiswa){
        $result = Calonsiswa::find($calonsiswa);
        return view('detail_calon',['calonsiswa'=>$result]);
    }
    public function create(){
        return view('form-pendaftaran');
    }
    public function store(Request $request){
        $validateData = $request->validate([
            'no_ppdb' => 'required|size:10',
            'nama'    => 'required|min:3|max:60',
            'asal_sekolah' => 'required',
            'pilihan1' => 'required',
            'pilihan2' => 'required',
            'alamat' => 'required',
            'no_hp' => 'required'
        ]);
        // dump($validateData);
        $calonsiswa = new Calonsiswa();
        $calonsiswa->no_ppdb = $validateData['no_ppdb'];
        $calonsiswa->nama = $validateData['nama'];
        $calonsiswa->asal_sekolah = $validateData['asal_sekolah'];
        $calonsiswa->pilihan1 = $validateData['pilihan1'];
        $calonsiswa->pilihan2 = $validateData['pilihan2'];
        $calonsiswa->alamat = $validateData['alamat'];
        $calonsiswa->no_hp = $validateData['no_hp'];
        $calonsiswa->save();

        return "Data berhasil di simpan ke database";
    }
}
