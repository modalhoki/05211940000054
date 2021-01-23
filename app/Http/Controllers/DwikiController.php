<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DwikiController extends Controller
{
    public function home() {
        $tabel = DB::table('dwiki')->paginate();
        return view('dwiki.home',['vartabel' => $tabel]);
    }

    public function tambah() {
        $jur = DB::table('jurusan')->get();
        return view('dwiki.tambah',['jurusan' => $jur]);
    }

    public function add(Request $dwiki) {
        DB::table('dwiki')->insert([
            'nrp' => $dwiki->nom,
            'nama' => $dwiki->jeneng,
            'jurusan' => $dwiki->jur
        ]);
        return redirect('dwiki');
    }

    public function edit($kode) {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $tabel = DB::table('dwiki')->where('id',$kode)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('dwiki.edit',['vartabel' => $tabel]);
    } 

    public function update(Request $dwiki) {
        DB::table('dwiki')->where('id',$dwiki->id)->update([
            'nrp' => $dwiki->nrp,
            'nama' => $dwiki->nama,
            'jurusan' => $dwiki->jurusan
        ]);
        return redirect('dwiki');
    }

    public function delete($kode) {
        // menghapus data pegawai berdasarkan id yang dipilih
        DB::table('dwiki')->where('id',$kode)->delete();
            // alihkan halaman ke halaman pegawai
        return redirect('dwiki');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
     
         // mengambil data dari table pegawai sesuai pencarian data
        $tabel= DB::table('dwiki')
        ->where('nama','like',"%".$cari."%")
        ->paginate();
     
            // mengirim data pegawai ke view index
        return view('dwiki.home',['vartabel' => $tabel]);
     
    }
}
