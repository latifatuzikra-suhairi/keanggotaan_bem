<?php

namespace App\Http\Controllers;

use App\Models\Dinas_biro;
use App\Models\Kepengurusan;
use App\Models\Pendaftaran;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $kabinet = Kepengurusan::select('id_kepengurusan', 'nama_kabinet')
                    ->where('status_kepengurusan', 1)
                    ->first();

        $dinas_biro = Dinas_biro::select('dinas_biro.id_dinasbiro', 'dinas_biro.nama_dinasbiro')
                    ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 
                    'dinas_biro.id_kepengurusan')
                    ->where('dinas_biro.id_kepengurusan', $kabinet->id_kepengurusan)
                    ->get();
        return view('pendaftaran', ['dinas_biro' => $dinas_biro, 'kabinet' => $kabinet]);
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
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'id_kepengurusan' => 'required',
            'nama' => 'required|max:50',
            'nim' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|max:13',
            'tempat_lahir' => 'required|max:20',                
            'tgl_lahir' => 'required',
            'transkrip' => 'required|mimes:pdf',
            'krs' => 'required|mimes:pdf',
            'foto' => 'required|image|file|max:1024',                
            'motto' => 'required',
            'kelebihan' => 'required',
            'kekurangan' => 'required',
            'motivasi' => 'required',
            'id_pilihan_1' => 'required',
            'alasan_pil_1' => 'required',
            'id_pilihan_2' => 'required',
            'alasan_pil_2' => 'required',
            'surat_pernyataan' => 'required|mimes:pdf,doc,docx',
        ]);

        $foto_name = $request->krs->getClientOriginalName() . '-' . time() . '-' . $request->foto->extension();
        $request->foto->move(public_path('foto'), $foto_name);

        $krs_name = $request->krs->getClientOriginalName() . '-' . time() . '-' . $request->krs->extension();
        $request->krs->move(public_path('krs'), $krs_name);

        $transkrip_name = $request->transkrip->getClientOriginalName() . '-' . time() . '-' . $request->transkrip->extension();
        $request->transkrip->move(public_path('transkrip'), $transkrip_name);

        $surat_name = $request->surat_pernyataan->getClientOriginalName() . '-' . time() . '-' . $request->surat_pernyataan->extension();
        $request->surat_pernyataan->move(public_path('surat-pernyataan'), $surat_name);

        $status_kelulusan = 0;
        $tahun_daftar = date('Y');

        Pendaftaran::create([
            'id_kepengurusan' => $request->id_kepengurusan,
            'nama' => $request->nama,
            'nim' => $request->nim,
            'jurusan' => $request->jurusan,
            'email' => $request->email,
            'no_hp' => $request->no_hp,
            'tempat_lahir' => $request->tempat_lahir,
            'tgl_lahir' => $request->tgl_lahir,
            'motto' => $request->motto,
            'kelebihan' => $request->kelebihan,
            'kekurangan' => $request->kekurangan,
            'motivasi' => $request->motivasi,
            'id_pilihan_1' => $request->id_pilihan_1,
            'alasan_pil_1' => $request->alasan_pil_1,
            'id_pilihan_2' => $request->id_pilihan_2,
            'alasan_pil_2' => $request->alasan_pil_2,
            'status_kelulusan' => $status_kelulusan,
            'tahun_daftar' => $tahun_daftar,
            'foto' => $foto_name,
            'krs' => $krs_name,
            'transkrip_nilai' => $transkrip_name,
            'surat_pernyataan' => $surat_name
        ]);

        return redirect('/daftar')->with('success', 'Pendaftaran Berhasil Dilakukan');
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
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
