<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class tabelController extends Controller
{
    public function home() {
        $tabel = DB::table('tugas')->paginate();
        return view('tabeltugas.tabelHome',['vartabel' => $tabel]);
    }

    public function tambah() {
        return view('tabeltugas.tabelTambah');
    }

    public function add(Request $request) {
        DB::table('tugas')->insert([
            'IDPegawai' => $request->id,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('tabel');
    }

    public function edit($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $tabel = DB::table('tugas')->where('IDPegawai',$id)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('tabeltugas.tabelEdit',['vartabel' => $tabel]);
    }    

    public function update(Request $request) {
        DB::table('tugas')->where('IDPegawai',$request->id)->update([
            'IDPegawai' => $request->id,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('tabel');
    }

    public function delete($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('tugas')->where('IDPegawai',$id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('tabel');
        }

        public function cari(Request $request)
        {
            // menangkap data pencarian
            $cari = $request->cari;
         
             // mengambil data dari table pegawai sesuai pencarian data
            $tabel= DB::table('tugas')
            ->where('NamaTugas','like',"%".$cari."%")
            ->paginate();
         
                // mengirim data pegawai ke view index
            return view('tabeltugas.tabelHome',['vartabel' => $tabel]);
         
        }

}
