<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pendaftaran extends Model
{
    use HasFactory;

    public $timestamps = false;
    
    protected $table = 'pendaftaran';
    protected $primaryKey = 'id_pendaftaran';
    public $incrementing = false;
    protected $fillable=['id_pendaftaran','id_kepengurusan', 'nama', 'nim', 'jurusan', 'email', 'no_hp', 'tempat_lahir',
                            'tgl_lahir', 'transkrip_nilai', 'krs', 'foto', 'motto', 'kelebihan', 'kekurangan',
                            'motivasi', 'surat_pernyataan', 'status_kelulusan', 'tahun_daftar'];

    public function kepengurusan(){
        return $this->belongsTo(Kepengurusan::class);
    }

    public function pilihan_daftar(){
        return $this->hasMany(Pilihan_daftar::class);
    }

    public function pengurus(){
        return $this->hasOne(Pengurus::class);
    }
}
