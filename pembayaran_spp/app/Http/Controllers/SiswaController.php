<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\SPPModel;
use Illuminate\Foundation\Auth\User;
use Session;

class SiswaController extends Controller
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
            "titlepage" => "Data Siswa",
            "pageside" => "Menu",
            "data_siswa" => SiswaModel::join('kelas', 'kelas.id_kelas', '=', 'siswa.id_kelas')
                                    ->join('spp', 'spp.id_spp', '=', 'siswa.id_spp')
                                    ->get()
        ];
        return view("siswa.index", $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Create Siswa",
            "pageside" => "Menu",
            "data_kelas" => KelasModel::all(),
            "data_spp" => SPPModel::all(),
        ];
        // $data1 = KelasModel::all();
        // $data2 = SPPModel::all();
        return view('siswa.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        SiswaModel::create([
            'nisn'=> $request->nisn,
            'nama'=> $request->nama,
            'id_kelas'=> $request->id_kelas,
            'alamat'=> $request->alamat,
            'no_telp'=> $request->no_telp,
            'jk'=> $request->jk,
            "id_kelas" => $request->kelas,
            'id_spp'=> $request->spp,
        ]);

        return redirect()->route('siswa.index')->with('message','Data Telah Berhasil Ditambahkan');
    //     return view('dsiswa.create');
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
        $data = [
            "titleside" => '-', 
            "titlepage" => "Edit Siswa",
            "pageside" => "Menu",
            "data_kelas" => KelasModel::all(),
            "data_spp" => SPPModel::all(),
            "data_siswa" => SiswaModel::find($id)
        ];
        
        return view('siswa.edit', $data);

        // return redirect()->route('siswa.index')->with('message','Data Telah Berhasil Ditambahkan');
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
        SiswaModel::find($id)->update([
            'nisn'=> $request->nisn,
            'nama'=> $request->nama,
            'id_kelas'=> $request->id_kelas,
            'alamat'=> $request->alamat,
            'jk'=> $request->jk,
            'no_telp'=> $request->no_telp,
            'id_spp'=> $request->id_spp,
        ]);

        return redirect()->route('siswa.index')->with('message', 'Data Telah Berhasil Diedit');
    }   

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = SiswaModel::find($id);
        $model->delete();

        return redirect()->route('siswa.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
}
