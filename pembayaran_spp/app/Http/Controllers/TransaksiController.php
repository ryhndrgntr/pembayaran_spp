<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Transaksi;
use App\Models\SiswaModel;
use Session;

class TransaksiController extends Controller
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
            "titlepage" => "Data Transaksi",
            "pageside" => "Menu",
            "data_transaksi" => Transaksi::join('siswa', 'siswa.id_siswa', '=', 'pembayaran.id_siswa')
                                         ->get()
        ];
        return view("transaksi.index", $data);
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
            "titlepage" => "Create Transaksi",
            "pageside" => "Menu",
            "data_siswa" => SiswaModel::all()
        ];
        return view("transaksi.create", $data);
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
       Transaksi::create([
           'id_petugas'=>$request->id_petugas,
           'id_siswa'=> $request->nisn,
            'tgl_bayar'=> $request->tgl_bayar,
            'bulan_dibayar'=> $request->bulan_dibayar,
            'tahun_dibayar'=> $request->tahun_dibayar,
            'id_spp'=>$request->id_spp,
            'jumlah_bayar'=> $request->jumlah_bayar,
        ]);

        return redirect()->route('transaksi.index')->with('message','Data Telah Berhasil Ditambahkan');
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
            "titlepage" => "Edit Transaksi",
            "pageside" => "Menu",
            "data_transaksi" => Transaksi::find($id)
        ];
        return view('transaksi.edit', $data);
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
        Transaksi::find($id)->update([
            'nisn'=> $request->nisn,
            'tgl_bayar'=> $request->tgl_bayar,
            'bulan_dibayar'=> $request->bulan_dibayar,
            'tahun_dibayar'=> $request->tahun_dibayar,
            'jumlah_bayar'=> $request->jumlah_bayar,
        ]);

        return redirect()->route('transaksi.index')->with('message', 'Data Telah Berhasil Diedit');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $model = Transaksi::find($id);
        $model->delete();

        return redirect()->route('transaksi.index')->with('message', 'Data Telah Berhasil Dihapus');
    }
}
