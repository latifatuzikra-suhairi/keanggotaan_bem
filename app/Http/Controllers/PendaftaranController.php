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
        // $this->validate($request, rules: [
        //     'id_kepengurusan' => 'required',
        //     'nama' => 'required|max:50',
        //     'nim' => 'required',
        //     'jurusan' => 'required',
        //     'email' => 'required|email',
        //     'no_hp' => 'required|max:13',
        //     'tempat_lahir' => 'required|max:20',
        //     'tgl_lahir' => 'required|before:today',
        //     'transkrip' => 'required|mimes:pdf',
        //     'krs' => 'required|mimes:pdf',
        //     'foto' => 'required|image|file|max:1000',
        //     'motto' => 'required',
        //     'kelebihan' => 'required',
        //     'kekurangan' => 'required',
        //     'motivasi' => 'required',
        //     'id_pilihan_1' => 'required',
        //     'alasan_pil_1' => 'required',
        //     'id_pilihan_2' => 'required',
        //     'alasan_pil_2' => 'required',
        //     'surat_pernyataan' => 'required|mimes:pdf,doc,docx'
        // ]);

        // $foto_name = $request->foto->getClientOriginalName();
        // $request->foto->storeAs('pas-foto', $foto_name);

        // $krs_name = $request->krs->getClientOriginalName();
        // $request->krs->storeAs('krs', $krs_name);

        // $transkrip_name = $request->transkrip->getClientOriginalName();
        // $request->transkrip->storeAs('transkrip-nilai', $transkrip_name);

        // $surat_name = $request->surat_pernyataan->getClientOriginalName();
        // $request->surat_pernyataan->storeAs('surat-pernyataan', $surat_name);

        // $status_kelulusan = 0;
        // $tahun_daftar = date('Y');

        // Pendaftaran::create([
        //     'id_kepengurusan' => $request->id_kepengurusan,
        //     'nama' => $request->nama,
        //     'nim' => $request->nim,
        //     'jurusan' => $request->jurusan,
        //     'email' => $request->email,
        //     'no_hp' => $request->no_hp,
        //     'tempat_lahir' => $request->tempat_lahir,
        //     'tgl_lahir' => $request->tgl_lahir,
        //     'motto' => $request->motto,
        //     'kelebihan' => $request->kelebihan,
        //     'kekurangan' => $request->kekurangan,
        //     'motivasi' => $request->motivasi,
        //     'id_pilihan_1' => $request->id_pilihan_1,
        //     'alasan_pil_1' => $request->alasan_pil_1,
        //     'id_pilihan_2' => $request->id_pilihan_2,
        //     'alasan_pil_2' => $request->alasan_pil_2,
        //     'status_kelulusan' => $status_kelulusan,
        //     'tahun_daftar' => $tahun_daftar,
        //     'foto' => $request->foto,
        //     'krs' => $request->krs,
        //     'transkrip' => $request->transkrip,
        //     'surat_pernyataan' => $request->surat_pernyataan
        // ]);
        // $daftar = new Pendaftaran;
        // $daftar->id_kepengurusan = $request->id_kepengurusan;
        // $daftar->nama = $request->nama;
        // $daftar->nim = $request->nim;
        // $daftar->jurusan = $request->jurusan;
        // $daftar->email = $request->email;
        // $daftar->no_hp = $request->no_hp;
        // $daftar->tempat_lahir = $request->tempat_lahir;
        // $daftar->tgl_lahir = $request->tgl_lahir;
        // $daftar->motto = $request->motto;
        // $daftar->kelebihan = $request->kelebihan;
        // $daftar->kekurangan = $request->kekurangan;
        // $daftar->motivasi = $request->motivasi;
        // $daftar->id_pilihan_1 = $request->id_pilihan_1;
        // $daftar->id_pilihan_2 = $request->id_pilihan_2;
        // $daftar->alasan_pil_1 = $request->alasan_pil_1;
        // $daftar->alasan_pil_2 = $request->alasan_pil_2;
        // $daftar->status_kelulusan = 0;
        // $daftar->tahun_daftar = date('Y');
        
        // if($request->file('foto')){
        //     $daftar->foto = $request->file('foto')->store('pas-foto');
        // }
        
        // if($request->file('krs')){
        //     $daftar->krs = $request->file('krs')->store('krs');
        // }

        // if($request->file('transkrip')){
        //     $daftar->transkrip = $request->file('transkrip')->store('transkrip-nilai');
        // }

        // if($request->file('surat_pernyataan')){
        //     $daftar->surat_pernyataan = $request->file('surat_pernyataan')->store('surat-pernyataan');
        // }

        // $daftar->save();
        // Pendaftaran::create($request->all());
        // // $request->request->add(['user_id' => $user->id]);
        // // Mahasiswa::create($request->all());
        //ddd($request);
        return $request->file('foto')->store('post_images');
        //return redirect('/landing')->with('success', 'Pendaftaran Berhasil Dilakukan');
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
