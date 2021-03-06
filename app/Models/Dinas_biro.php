<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dinas_biro extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'dinas_biro';
    protected $primaryKey = 'id_dinasbiro';
    protected $fillable=['id_kepengurusan', 'nama_dinasbiro'];

    public function kepengurusan()
    {
        return $this->belongsTo(Kepengurusan::class);
    }

    public function pilihan_daftar()
    {
        return $this->hasMany(Pilihan_daftar::class);
    }
 
    public function pengurus()
    {
        return $this->hasMany(Pengurus::class);
    }
}
