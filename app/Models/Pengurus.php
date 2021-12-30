<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pengurus extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'pengurus';
    protected $primaryKey = 'id_pengurus';
    protected $fillable=['id_pendaftaran', 'id_dinasbiro', 'alamat_skrng', 'alamat_asal','goldar',
    'riwayat_penyakit', 'suku', 'anak_ke', 'jumlah_saudara', 'sosmed', 'orang_tua', 'level_ukt',
    'cita_cita', 'hobi', 'prestasi', 'organisasi', 'beasiswa', 'bisnis', 'status_mentoring', 'jabatan', 'password', 'role'];

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class);
    }

    public function dinas_biro(){
        return $this->belongsTo(Dinas_biro::class);
    }

}
