<?php

namespace App\Http\Controllers;

use DB;
use App\Models\Pendaftaran;
use App\Models\Dinas_biro;
use App\Models\Pengurus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;


class AutentikasiController extends Controller
{
    public function getPendaftaran()
    {
        $tahun_sekarang = date('Y');
        $pendaftar = Pendaftaran::join('pilihan_daftar', 'pendaftaran.id_pendaftaran', '=', 'pilihan_daftar.id_pendaftaran')
        ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pilihan_daftar.id_pilihan')
        ->select('pendaftaran.id_pendaftaran', 'pendaftaran.nama', 'pendaftaran.nim')
        ->selectRaw("GROUP_CONCAT(dinas_biro.nama_dinasbiro) as nama_dinas")
        ->where('pendaftaran.status_kelulusan' , '=', '0')
        ->where('pendaftaran.tahun_daftar', '=', $tahun_sekarang)
        ->groupBy('pendaftaran.id_pendaftaran')
        ->paginate(15);
        return view('pendaftar.pendaftar', ['pendaftar' => $pendaftar]);
    }

    public function getDetailPendaftaran($id_pendaftaran){
        $data = Pendaftaran::join('pilihan_daftar', 'pendaftaran.id_pendaftaran', '=', 'pilihan_daftar.id_pendaftaran')
        ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pilihan_daftar.id_pilihan')
        ->select('pendaftaran.*')
        ->selectRaw("GROUP_CONCAT(dinas_biro.nama_dinasbiro) as nama_dinas")
        ->selectRaw("GROUP_CONCAT(pilihan_daftar.alasan_pil) as alasan_pilihan")
        ->where('pendaftaran.id_pendaftaran', $id_pendaftaran)
        ->groupBy('pendaftaran.id_pendaftaran')
        ->first();
        //dd($data);

        //mengambil nama dinas biro pada kepengurusan pendaftaran
        $id_kepengurusan = Pendaftaran::select('id_kepengurusan')
                    ->where('id_pendaftaran', $id_pendaftaran)
                    ->first();

        $dinas_biro = Dinas_biro::select('dinas_biro.id_dinasbiro', 'dinas_biro.nama_dinasbiro')
                    ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 
                    'dinas_biro.id_kepengurusan')
                    ->where('kepengurusan.id_kepengurusan', $id_kepengurusan->id_kepengurusan)
                    ->get();

        return view('pendaftar.detailpendaftar', ['detail'=> $data, 'dinas_biro'=>$dinas_biro]);
    }

    public function setAssignAkun(Request $request){
        $request->validate([
            'id_pendaftaran' => 'required',
            'id_dinasbiro' => 'required',
            'role' => 'required',
        ]);

        $data = $request->all();  
        $queryupdate = Pendaftaran::where('id_pendaftaran', $data['id_pendaftaran'])->update(['status_kelulusan'=> '1']);

        $general_pass = Hash::make("BEMKMFTI");
        $pengurus = new Pengurus;
        $pengurus->id_pendaftaran = $data['id_pendaftaran'];
        $pengurus->id_dinasbiro = $data['id_dinasbiro'];
        $pengurus->password = $general_pass;
        $pengurus->role = $data['role'];
        $queryinsert = $pengurus->save();

    if(($queryupdate == 1) && ($queryinsert == true)){
        return redirect('/pendaftar')->with('success', 'Assign akun berhasil dilakukan!');
    }
    else{
        return redirect('/pendaftar')->with('error', 'Assign akun gagal dilakukan!');
    }   
    }


    public function requestHalamanProfil(){
        //meminta id
        // $profil = Pendaftaran::select('pendaftaran.nama', 'dinas_biro.nama_dinasbiro', 'pendaftaran.tempat_lahir', 'pendaftaran.tgl_lahir')
        //             ->join('pengurus', 'pendaftaran.id_pendaftaran', '=', 'pengurus.id_pendaftaran')
        //             ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pengurus.id_dinasbiro')
        //             ->first();

        $id_pengurus = 17;
        $detail = Pengurus:: join('pendaftaran', 'pengurus.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
        ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pengurus.id_dinasbiro')
        ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 'pendaftaran.id_kepengurusan')
        ->select('pendaftaran.nama', 'pendaftaran.nim', 'pendaftaran.jurusan', 'pendaftaran.email', 'pendaftaran.no_hp',
         'pendaftaran.tempat_lahir', 'pendaftaran.tgl_lahir', 'pendaftaran.foto', 'dinas_biro.nama_dinasbiro', 'pengurus.*',
         'kepengurusan.id_kepengurusan')
        ->where('pendaftaran.status_kelulusan', '=', '1')
        ->where('pengurus.id_pengurus', '=', $id_pengurus)
        //->where('kepengurusan.id_kepengurusan', '=', $id_kepengurusan)
        ->first();
        //dd($detailPengurus);
        return view('profil.profil', compact('detail'));
                    
        //return view('profil.profil', ['profil' => $profil]);
    }

    public function getdata()
    {
        $id_pengurus = 17;
        $detail = Pengurus:: join('pendaftaran', 'pengurus.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
        ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pengurus.id_dinasbiro')
        ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 'pendaftaran.id_kepengurusan')
        ->select('pendaftaran.nama', 'pendaftaran.nim', 'pendaftaran.jurusan', 'pendaftaran.email', 'pendaftaran.no_hp',
         'pendaftaran.tempat_lahir', 'pendaftaran.tgl_lahir', 'pendaftaran.foto', 'dinas_biro.nama_dinasbiro', 'pengurus.*',
         'kepengurusan.id_kepengurusan')
        ->where('pendaftaran.status_kelulusan', '=', '1')
        ->where('pengurus.id_pengurus', '=', $id_pengurus)
        //->where('kepengurusan.id_kepengurusan', '=', $id_kepengurusan)
        ->first();
        //dd($detailPengurus);
        return view('profil.updatepengurus', compact('detail'));
       
    }

    public function setData(Request $request)
    {
        $id_pengurus = 17;
        $updatepengurus = Pengurus::where('id_pengurus', $id_pengurus)->update([
            'alamat_skrng' => $request->alamat_skrng,
            'alamat_asal' =>$request->alamat_asal,
            'goldar' =>$request->goldar,
            'riwayat_penyakit' =>$request->riwayat_penyakit,
            'suku' => $request->suku,
            'anak_ke' =>$request->anak_ke,
            'jumlah_saudara' =>$request->jumlah_saudara,
            'sosmed' =>$request->sosmed,
            'orang_tua' => $request->orang_tua,
            'level_ukt' =>$request->level_ukt,
            'cita_cita' =>$request->cita_cita,
            'hobi' =>$request->hobi,
            'prestasi' =>$request->prestasi,
            'organisasi' =>$request->organisasi,
            'beasiswa' => $request->beasiswa,
            'bisnis' =>$request->bisnis,
            'status_mentoring' =>$request->status_mentoring,
            'jabatan' =>$request->jabatan,
        ]);
        
        return redirect('/profil')->with('toast_success', 'Data Berhasil Diupdate');
        
    }

    public function requestHalamanGantiPassword(){
        //meminta dan mereturn id
        return view('profil.gantipassword');
    }

    public function setPassword(){
        
    }
}
