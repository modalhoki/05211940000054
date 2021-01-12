<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class easController extends Controller
{
    public function home() {
        $tabel = DB::table('mahasiswa')->paginate();
        return view('eas.index',['vartabel' => $tabel]);
    }

    public function tambah() {
        return view('eas.tambah');
    }

    public function add(Request $request) {
        DB::table('mahasiswa')->insert([
            'NRP' => $request->nrp,
            'Nama' => $request->nama,
            'Jurusan' => $request->jurusan,
            'IPK' => $request->ipk
        ]);
        return redirect('eas');
    }

    public function delete($nrp) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('mahasiswa')->where('NRP',$nrp)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('eas');
        }

}
