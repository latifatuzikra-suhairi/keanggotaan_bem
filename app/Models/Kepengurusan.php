<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kepengurusan extends Model
{
    use HasFactory;
    public $timestamps = false;
    protected $table = 'kepengurusan';
    protected $primaryKey = 'id_kepengurusan';
    protected $fillable=['nama_kabinet', 'periode', 'status_kepengurusan', 'logo_kabinet'];

    public function dinas_biro()
    {
        return $this->hasMany(Dinas_biro::class);
    }   

    public function pendaftaran()
    {
        return $this->hasMany(Pendaftaran::class);
    }   
}
