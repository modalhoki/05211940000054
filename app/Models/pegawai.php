<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
    use HasFactory;

    protected $table = "pegawai";

    public function tugas()
    {
    	return $this->hasOne(tugas::class, 'IDPegawai', 'pegawai_id');
    }
}
