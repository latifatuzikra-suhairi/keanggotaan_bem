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
    protected $fillable=['id_pendaftaran', 'id_dinasbiro', 'password'];

    public function pendaftaran(){
        return $this->belongsTo(Pendaftaran::class);
    }

    public function dinas_biro(){
        return $this->belongsTo(Dinas_biro::class);
    }

}
