<?php

namespace App\Http\Controllers;

use Session;
use App\Models\SPPModel;
use Illuminate\Http\Request;
use Validator;

class SPPController extends Controller
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
            "titlepage" => "Data SPP",
            "pageside" => "Menu",
            "data_spp" => SPPModel::all()
        ];
        return view("spp.index", $data);
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
            "titlepage" => "Create SPP",
            "pageside" => "Menu",
        ];
        return view('spp.create', $data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     "tahun" => ['required', 'int'],
        //     "nominal" => ['required', 'int'],
        // ]);

        SPPModel::create([
            'tahun'=> $request->tahun,
            'nominal'=> $request->nominal,
        ]);

        return redirect()->route('spp.index')->with('message','Data Telah Berhasil Ditambahkan');
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
            "titlepage" => "Data SPP",
            "pageside" => "Menu",
            "data_spp" => SPPModel::find($id)
        ];
        return view('spp.edit', $data);
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
        SPPModel::find($id)->update([
            'tahun'=> $request->tahun,
            'nominal'=> $request->nominal,
        ]);

        return redirect()->route('spp.index')->with('message', 'Data Telah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = SPPModel::find($id);
        $model->delete();

        return redirect()->route('spp.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
}
