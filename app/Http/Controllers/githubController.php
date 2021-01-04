<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\tugas;
use App\Models\pegawai;

class githubController extends Controller
{
    public function home() {
        // mengambil semua data pengguna
    	$tugas = tugas::paginate();
    	// return data ke view
    	return view('github.githubHome', ['varrelation' => $tugas]);
    }

    public function read($id) {
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        $tugas = DB::table('tugas')->where('IDPegawai',$id)->paginate();
        return view('github.githubRead',['tugas' => $tugas],['pegawai' => $pegawai]);
    }

    public function penuh() {
        // mengambil semua data pengguna
    	$tugas = tugas::paginate();
    	// return data ke view
    	return view('github.githubPenuh', ['varrelation' => $tugas]);
    }

    public function tambah() {
        $pegawai = DB::table('pegawai')->get();
        return view('github.githubTambah', ['pegawai' => $pegawai]);
    }

    public function add(Request $request) {
        DB::table('tugas')->insert([
            'IDPegawai' => $request->id,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('github');
    }

    public function edit($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
        $relation = tugas::where('ID',$id)->get();
        $pegawai = DB::table('pegawai')->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('github.githubEdit',['varrelation' => $relation],['varpegawai' => $pegawai]);
    }
    
    public function update(Request $request) {
        DB::table('tugas')->where('ID',$request->id)->update([
            'IDPegawai' => $request->idpegawai,
            'Tanggal' => $request->date,
            'NamaTugas' => $request->assignment,
            'Status' => $request->status
        ]);
        return redirect('github');
    }

    public function delete($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('tugas')->where('ID',$id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('github');
    }

    public function cari(Request $request)
    {
        // menangkap data pencarian
        $cari = $request->cari;
     
         // mengambil data dari table pegawai sesuai pencarian data
        $tabel = tugas::where('NamaTugas','like',"%".$cari."%")->paginate();
     
            // mengirim data pegawai ke view index
        return view('github.githubHome',['varrelation' => $tabel]);
     
    }

    public function pegawai() {
        $pegawai = DB::table('pegawai')->paginate();
        return view('github.githubPegawai',['pegawai' => $pegawai]);
    }

    public function pegawaiTambah() {
        $jabatan = DB::table('jabatan')->paginate();
        return view('github.githubPegawaiTambah',['jabatan' => $jabatan]);
    }

    public function addPegawai(Request $request) {
        DB::table('pegawai')->insert([
            'pegawai_nama' => $request->nama,
            'pegawai_jabatan' => $request->jabatan,
            'pegawai_umur' => $request->umur,
            'pegawai_alamat' => $request->alamat
        ]);
        return redirect('github/pegawai');
    }

    // method untuk edit data pegawai
    public function editPegawai($id) {
	    // mengambil data pegawai berdasarkan id yang dipilih
        $pegawai = DB::table('pegawai')->where('pegawai_id',$id)->get();
        $jabatan = DB::table('jabatan')->get();
	    // passing data pegawai yang didapat ke view edit.blade.php
	    return view('github.githubPegawaiEdit',['varpegawai' => $pegawai],['jabatan' => $jabatan]);
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
	    return redirect('github/pegawai');
    }

    public function hapusPegawai($id) {
        // menghapus data pegawai berdasarkan id yang dipilih
            DB::table('pegawai')->where('pegawai_id',$id)->delete();
            // alihkan halaman ke halaman pegawai
            return redirect('github/pegawai');
        }
}
