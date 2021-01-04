<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class tugas extends Model
{
    use HasFactory;

    protected $table = "tugas";

    public function pegawai()
    {
    	return $this->hasOne(pegawai::class, 'pegawai_id', 'IDPegawai');
    }
}
