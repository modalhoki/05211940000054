<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\tugas;

class relationController extends Controller
{
    public function home() {
        // mengambil semua data pengguna
    	$tugas = tugas::paginate();
    	// return data ke view
    	return view('relation.relationHome', ['varrelation' => $tugas]);
    }

    public function penuh() {
        // mengambil semua data pengguna
    	$tugas = tugas::paginate();
    	// return data ke view
    	return view('relation.relationPenuh', ['varrelation' => $tugas]);
    }

    public function tambah() {
        $pegawai = DB::table('pegawai')->get();
        return view('relation.relationTambah', ['pegawai' => $pegawai]);
    }

    public function add(Request $request) {
        DB::table('tugas')->insert([
            'IDPegawai' => $request->id,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('relation');
    }

    public function edit($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
        $relation = tugas::where('ID',$id)->get();
        $pegawai = DB::table('pegawai')->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('relation.relationEdit',['varrelation' => $relation],['varpegawai' => $pegawai]);
    }
    
    public function update(Request $request) {
        DB::table('tugas')->where('ID',$request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('relation');
    }

    public function delete($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('tugas')->where('ID',$id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('relation');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
     
         // mengambil data dari table pegawai sesuai pencarian data
        $tabel = tugas::where('NamaTugas','like',"%".$cari."%")->paginate();
     
            // mengirim data pegawai ke view index
        return view('relation.relationHome',['varrelation' => $tabel]);
     
    }

    public function pegawai() {
        $pegawai = DB::table('pegawai')->paginate();
        return view('relation.relationPegawai',['pegawai' => $pegawai]);
    }

    public function pegawaiTambah() {
        $jabatan = DB::table('jabatan')->paginate();
        return view('relation.relationPegawaiTambah',['jabatan' => $jabatan]);
    }

    public function addPegawai(Request $request) {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('relation/pegawai');
    }

    // method untuk edit data pegawai
    public function editPegawai($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        $jabatan = DB::table('jabatan')->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('relation.relationPegawaiEdit',['varpegawai' => $pegawai],['jabatan' => $jabatan]);
    }

    public function updatePegawai(Request $request) {
	    // update data pegawai
	    DB::table('pegawai')->where('pegawai_id',$request->id)->update([
		    'pegawai_nama' => $request->nama,
		    'pegawai_jabatan' => $request->jabatan,
		    'pegawai_umur' => $request->umur,
		    'pegawai_alamat' => $request->alamat
        ]);
	    // alihkan halaman ke halaman pegawai
	    return redirect('relation/pegawai');
    }

    public function hapusPegawai($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('pegawai')->where('pegawai_id',$id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('relation/pegawai');
        }
}
