<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengurus;
use App\Models\Pendaftaran;
use App\Models\Dinas_biro;
use App\Models\Kepengurusan;


class PengurusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id_kepengurusan)
    {
        $dtPengurus = Pengurus:: join('pendaftaran', 'pengurus.id_pendaftaran', '=', 'pendaftaran.id_pendaftaran')
        ->join('dinas_biro', 'dinas_biro.id_dinasbiro', '=', 'pengurus.id_dinasbiro')
        ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 'pendaftaran.id_kepengurusan')
        ->select('pendaftaran.nama', 'pendaftaran.nim', 'pendaftaran.jurusan', 'dinas_biro.nama_dinasbiro', 'pengurus.id_pengurus')
        ->where('pendaftaran.status_kelulusan', '=', '1')
        ->where('kepengurusan.id_kepengurusan', '=', $id_kepengurusan)
        ->paginate(15);
        //dd($dtPengurus);
        return view('dashboard.pengurus', compact('dtPengurus'));
    }

    public function getdetail($id_pengurus)
    {
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
        return view('dashboard.detailpengurus', compact('detail'));
        
    }

    public function getdata($id_pengurus)
    {
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
        return view('dashboard.updatepengurus', compact('detail'));
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function setData(Request $request, $id_pengurus)
    {
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
        
        return redirect('/kepengurusan')->with('toast_success', 'Data Berhasil Diupdate');
        
    }

     /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
