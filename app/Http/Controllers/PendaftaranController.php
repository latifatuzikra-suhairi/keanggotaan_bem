<?php

namespace App\Http\Controllers;

use App\Models\Dinas_biro;
use App\Models\Kepengurusan;
use App\Models\Pendaftaran;
use App\Models\Pilihan_daftar;
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
        $tahun_daftar = date('Y');
        $kode_tahun = substr($tahun_daftar, 2);

        $id_pendaftar = Pendaftaran::max('id_pendaftaran');
        $urutan = (int) substr($id_pendaftar, 2, 5);
        $urutan++;
        $kodePendaftar = $kode_tahun . sprintf("%03s", $urutan);

        $kabinet = Kepengurusan::select('id_kepengurusan', 'nama_kabinet')
                    ->where('status_kepengurusan', 1)
                    ->first();

        $dinas_biro = Dinas_biro::select('dinas_biro.id_dinasbiro', 'dinas_biro.nama_dinasbiro')
                    ->join('kepengurusan', 'kepengurusan.id_kepengurusan', '=', 
                    'dinas_biro.id_kepengurusan')
                    ->where('dinas_biro.id_kepengurusan', $kabinet->id_kepengurusan)
                    ->get();

        return view('pendaftaran', ['dinas_biro' => $dinas_biro, 'kabinet' => $kabinet, 'id_pendaftar' => $kodePendaftar]);
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
            'id_pendaftaran' => 'required',
            'id_kepengurusan' => 'required',
            'nama' => 'required|max:50',
            'nim' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
            'no_hp' => 'required|max:13',
            'tempat_lahir' => 'required|max:20',                
            'tgl_lahir' => 'required|before:today',
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

        $pendaftaran = new Pendaftaran;
        $pendaftaran->id_pendaftaran = $request->id_pendaftaran;
        $pendaftaran->id_kepengurusan = $request->id_kepengurusan;
        $pendaftaran->nama = $request->nama;
        $pendaftaran->nim = $request->nim;
        $pendaftaran->jurusan = $request->jurusan;
        $pendaftaran->email = $request->email;
        $pendaftaran->no_hp = $request->no_hp;
        $pendaftaran->tempat_lahir = $request->tempat_lahir;
        $pendaftaran->tgl_lahir = $request->tgl_lahir;
        $pendaftaran->motto = $request->motto;
        $pendaftaran->kelebihan = $request->kelebihan;
        $pendaftaran->kekurangan = $request->kekurangan;
        $pendaftaran->motivasi = $request->motivasi;
        $pendaftaran->status_kelulusan = $status_kelulusan;
        $pendaftaran->tahun_daftar = $tahun_daftar;
        $pendaftaran->foto = $foto_name;
        $pendaftaran->krs = $krs_name;
        $pendaftaran->transkrip_nilai = $transkrip_name;
        $pendaftaran->surat_pernyataan = $surat_name;
        $pendaftaran->save();

        $pil1 = new Pilihan_daftar;
        $pil1->id_pendaftaran = $request->id_pendaftaran;
        $pil1->id_pilihan = $request->id_pilihan_1;
        $pil1->alasan_pil = $request->alasan_pil_1;
        $pil1->save();

        $pil2 = new Pilihan_daftar;
        $pil2->id_pendaftaran = $request->id_pendaftaran;
        $pil2->id_pilihan = $request->id_pilihan_2;
        $pil2->alasan_pil = $request->alasan_pil_2;
        $pil2->save();

        if($pendaftaran == true && $pil1 == true && $pil2 == true ){
            return redirect('/daftar')->with('success', 'Pendaftaran Berhasil Dilakukan');
        }
        else{
            return redirect('/daftar')->with('error', 'Pendaftaran Gagal Dilakukan!');
        }
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
