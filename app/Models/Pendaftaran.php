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
    protected $fillable=['id_kepengurusan', 'nama', 'nim', 'jurusan', 'email', 'no_hp', 'tempat_lahir',
                            'tgl_lahir', 'transkrip_nilai', 'krs', 'foto', 'motto', 'kelebihan', 'kekurangan',
                            'motivasi', 'id_pilihan_1', 'alasan_pil_1', 'id_pilihan_2', 'alasan_pil_2', 'surat_pernyataan', 'status_kelulusan', 'tahun_daftar'];

    public function kepengurusan(){
        return $this->belongsTo(Kepengurusan::class);
    }
}
