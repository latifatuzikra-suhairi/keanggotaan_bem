<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pilihan_daftar extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'pilihan_daftar';
    protected $primaryKey = 'id_pilihan_dinas_biro';
    protected $fillable=['id_pendaftaran', 'id_pilihan', 'alasan_pil'];

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class);
    }

    public function dinas_biro(){
        return $this->belongsTo(Dinas_biro::class);
    }
}
