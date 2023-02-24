<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Session;
use App\Models\PetugasModel;
use App\Models\User;

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
            "data_petugas" => PetugasModel::join("users", "users.id", "=" , "petugas.id_users")->get()
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
        $data = [
            "titleside" => '-', 
            "titlepage" => "Create Petugas",
            "pageside" => "Menu",
           
        ];
        return view('petugas.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nama = $request->nama_petugas;

        $user = User::create([
            'email'=> $request->email,
            'password'=> Hash::make($request->password),
            'name'=> $nama,
            'role'=> 1,
        ]);

        PetugasModel::create([
            'nama_petugas'=> $nama,
            'id_users' => $user->id,
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
    public function edit( $id)
    {
        
        
        $data = [
            "titleside" => '-', 
            "titlepage" => "Edit Petugas",
            "pageside" => "Menu",
            // "data_petugas" => PetugasModel::find($id)
            "data_petugas" => PetugasModel::join("users", "users.id", "=" , "petugas.id_users")->find($id)
        ];
        return view('petugas.edit', $data);
        
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
            'nama_petugas'=> $request->nama_petugas,
        ]);
        
        User::find($request->id_users)->update([
            'name' => $request->nama_petugas,
            'email'=> $request->email,
        ]);

        // PetugasModel::join("users", "users.id", "=" , "petugas.id_users")->find($id)->update([
        //     'nama_petugas'=> $request->nama_petugas,
        //     'email'=> $request->email,
        // ]);

        return redirect()->route('petugas.index')->with('message', 'Data Telah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request, $id)
    {
        $model = PetugasModel::find($id);
        $model2 = User::find($request->id_users);
        $model->delete();
        $model2->delete();
        return redirect()->route('petugas.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
    
}
