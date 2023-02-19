<?php

namespace App\Http\Controllers;

use Session;
use App\Models\KelasModel;
use Illuminate\Http\Request;

class KelasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Data Kelas",
            "pageside" => "Menu",
            "data_kelas" => KelasModel::all()
        ];
        return view("kelas.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('kelas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        KelasModel::create([
            'nama_kelas'=> $request->nama_kelas,
            'jurusan'=> $request->jurusan,
        ]);

        return redirect()->route('kelas.index')->with('message','Data Telah Berhasil Ditambahkan');
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
    public function edit(Kelas $kelas)
    {
        $data_kelas = KelasModel::find($kelas);
        return view('kelas.edit', compact('data_kelas'));
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
        KelasModel::find($id)->update([
            'nama_kelas'=> $request->nama_kelas,
            'jurusan'=> $request->jurusan,
        ]);

        return redirect()->route('kelas.index')->with('message', 'Data Telah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = KelasModel::find($id);
        $model->delete();

        return redirect()->route('kelas.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
}
