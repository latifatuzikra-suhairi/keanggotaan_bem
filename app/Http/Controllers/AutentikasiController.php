<?php

namespace App\Http\Controllers;

use App\Models\Pendaftaran;
use App\Models\Dinas_biro;
use App\Models\Kepengurusan;
use Illuminate\Http\Request;

class AutentikasiController extends Controller
{
    public function pendaftarindex()
    {
        // $kabinet = Kepengurusan::select('id_kepengurusan', 'nama_kabinet')
        //             ->where('status_kepengurusan', 1)
        //             ->first();
        // $dinas_biro = Dinas_biro::select('dinas_biro.id_dinasbiro', 'dinas_biro.nama_dinasbiro')
        //             ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 
        //             'dinas_biro.id_kepengurusan')
        //             ->where('dinas_biro.id_kepengurusan', $kabinet->id_kepengurusan)
        //             ->get();

        // $pendaftar = Pendaftaran::select('pendaftaran.id_pendaftaran', 'pendaftaran.nama', 'pendaftaran.nim', 
        //                         'pendaftaran.id_pilihan_1', 'pendaftaran.id_pilihan_2', 'dinas_biro.nama_dinasbiro', 'kepengurusan.nama_kabinet')
        //             ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 'pengurus.id_kepengurusan')
        //             ->join('dinas_biro', '')
        return view('pendaftar.pendaftar');
    }

    public function profilindex(){
        //meminta id
        return view('profil.profil');
    }

    public function gantipassword(){
        //meminta dan mereturn id
        return view('profil.gantipassword');
    }

    public function storegantipassword(){
        
    }
}
