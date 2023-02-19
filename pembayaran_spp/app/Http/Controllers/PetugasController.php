<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Session;
use App\Models\PetugasModel;

class PetugasController extends Controller
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
            "titlepage" => "Data Petugas",
            "pageside" => "Menu",
            "data_petugas" => PetugasModel::whereNotIn("level", ["Admin"])->get()
        ];
        return view("petugas.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('petugas.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        PetugasModel::create([
            'username'=> $request->username,
            'password'=> $request->password,
            'nama_petugas'=> $request->nama_petugas,
            'level'=> $request->level,
        ]);

        return redirect()->route('petugas.index')->with('message','Data Telah Berhasil Ditambahkan');
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
    public function edit(Petugas $petugas)
    {
        $data_petugas = PetugasModel::find($petugas);
        return view('petugas.edit', compact('data_petugas'));
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
        PetugasModel::find($id)->update([
            'username'=> $request->username,
            'password'=> $request->password,
            'nama_petugas'=> $request->nama_petugas,
            'level'=> $request->level,
        ]);

        return redirect()->route('petugas.index')->with('message', 'Data Telah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = PetugasModel::find($id);
        $model->delete();

        return redirect()->route('petugas.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
}
