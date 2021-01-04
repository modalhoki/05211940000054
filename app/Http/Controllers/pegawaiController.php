<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class pegawaiController extends Controller
{
    public function halamanUtama() {
        $pegawai = DB::table('pegawai')->get();
        return view('crud.crudHome',['pegawai' => $pegawai]);
    }

    public function halamanTambah() {
        return view('crud.crudTambah');
    }

    public function store(Request $request) {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('/pegawai');
    }

    // method untuk edit data pegawai
    public function edit($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('crud.edit',['varpegawai' => $pegawai]);
    }

    // update data pegawai
    public function update(Request $request) {
	    // update data pegawai
	    DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		    'pegawai_nama' => $request->nama,
		    'pegawai_jabatan' => $request->jabatan,
		    'pegawai_umur' => $request->umur,
		    'pegawai_alamat' => $request->alamat
        ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('/pegawai');
    }

    public function hapus($id) {
	// menghapus data pegawai berdasarkan id yang dipilih
	    DB::table('pegawai')->where('pegawai_id',$id)->delete();
	    // alihkan halaman ke halaman pegawai
        return redirect('/pegawai');
    }


 

}
