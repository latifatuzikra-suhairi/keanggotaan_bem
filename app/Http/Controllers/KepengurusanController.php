<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Kepengurusan;

class KepengurusanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dtKepengurusan = Kepengurusan::all();
        return view('dashboard.kepengurusan', compact('dtKepengurusan'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.tambah-kepengurusan');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $file_name = $request->logo->getClientOriginalName();
        $logo = $request->logo->move(public_path('logo'), $file_name);
        
        Kepengurusan::create([
            'nama_kabinet' => $request->nama_kabinet,
            'periode' =>$request->periode,
            'status_kepengurusan' =>$request->status,
            'logo_kabinet' =>$file_name,
        ]);

        return redirect('kepengurusan')->with('toast_success', 'Data Berhasil Tersimpan');
    }

    public function getupdate($id_kepengurusan)
    {
        $editkp = Kepengurusan:: select('id_kepengurusan', 'nama_kabinet', 'periode', 'status_kepengurusan', 'logo_kabinet')
        ->where('id_kepengurusan', '=', $id_kepengurusan)
        ->first();
        //dd($detailPengurus);
        return view('dashboard.updateKepengurusan', compact('editkp'));
       
    }

    public function setUpdate(Request $request, $id_kepengurusan)
    {
        $file_name = $request->logo->getClientOriginalName();
        $logo = $request->logo->move(public_path('logo'), $file_name);
        
        $update = Kepengurusan::where('id_kepengurusan', $id_kepengurusan)->update([
            'nama_kabinet' => $request->nama_kabinet,
            'periode' =>$request->periode,
            'status_kepengurusan' =>$request->status,
            'logo_kabinet' =>$file_name,
        ]);
        if($update == true){
            return redirect('/kepengurusan')->with('toast_success', 'Update Berhasil Dilakukan');
        }
        else{
            return redirect('/kepengurusan')->with('error', 'Update Gagal Dilakukan!');
        }
        //return redirect('kepengurusan')->with('toast_success', 'Data Berhasil Diubah');
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
