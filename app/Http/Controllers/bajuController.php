<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bajuController extends Controller
{
    public function home() {
        $tabel = DB::table('baju')->paginate();
        return view('baju.bajuHome',['vartabel' => $tabel]);
    }

    public function tambah() {
        return view('baju.bajuTambah');
    }

    public function add(Request $request) {
        DB::table('baju')->insert([
            'merkbaju' => $request->merk,
            'stockbaju' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('baju');
    }

    public function edit($kode) {
	    // mengambil data pegawai berdasarkan id yang dipilih
	    $tabel = DB::table('baju')->where('kodebaju',$kode)->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('baju.bajuEdit',['vartabel' => $tabel]);
    }    

    public function update(Request $request) {
        DB::table('baju')->where('kodebaju',$request->kode)->update([
            'merkbaju' => $request->merk,
            'stockbaju' => $request->stock,
            'tersedia' => $request->tersedia
        ]);
        return redirect('baju');
    }

    public function delete($kode) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('baju')->where('kodebaju',$kode)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('baju');
        }

        public function cari(Request $request)
        {
            // menangkap data pencarian
            $cari = $request->cari;
         
             // mengambil data dari table pegawai sesuai pencarian data
            $tabel= DB::table('baju')
            ->where('merkbaju','like',"%".$cari."%")
            ->paginate();
         
                // mengirim data pegawai ke view index
            return view('baju.bajuHome',['vartabel' => $tabel]);
         
        }
}
