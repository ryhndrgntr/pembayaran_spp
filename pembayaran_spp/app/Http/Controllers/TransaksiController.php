<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Transaksi;
use App\Models\SiswaModel;
use App\Models\SPPModel;
use Illuminate\Support\Facades\DB;

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
                                        ->join('spp', 'spp.id_spp', '=', 'pembayaran.id_spp')
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
            "data_siswa" => SiswaModel::all(),
            "data_spp" => SPPModel::all(),
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
       $nisn = $request->nisn;
       $bulan_dibayar = $request->bulan_dibayar;
       $tahun_dibayar = $request->tahun_dibayar;
       $jumlahbayar = (int)preg_replace('/[Rp. ]/','',$request->jumlah_bayar);
 
    $check_bayar = DB::select("SELECT * FROM `pembayaran` WHERE `id_siswa` = " . $nisn . " AND `bulan_dibayar` = '" . $bulan_dibayar . "' AND `tahun_dibayar` = " . $tahun_dibayar . " limit 1;");
        if ($check_bayar != null) {
            $data = [
                "titleside" => '-', 
                "titlepage" => "Create Transaksi",
                "pageside" => "Menu",
                "data_siswa" => SiswaModel::all()
            ];
            return view("transaksi.create", $data)->with('message','Input gagal karena SPP sudah dibayar');  
        }
    //    dd($check_bayar);
       
       if(Auth::user()->role == "petugas"){
        Transaksi::create([
            'id_petugas'=>$request->id_petugas,
            'id_siswa'=> $request->nisn,
             'tgl_bayar'=> $request->tgl_bayar,
             'bulan_dibayar'=> $request->bulan_dibayar,
             'tahun_dibayar'=> $request->tahun_dibayar,
             'id_spp'=>$request->id_spp,
             'jumlah_bayar'=> $jumlahbayar,
             'is_admin' => 0,
         ]);
       }
       elseif (Auth::user()->role == "admin") {
        Transaksi::create([
            'id_petugas'=>$request->id_petugas,
            'id_siswa'=> $request->nisn,
             'tgl_bayar'=> $request->tgl_bayar,
             'bulan_dibayar'=> $request->bulan_dibayar,
             'tahun_dibayar'=> $request->tahun_dibayar,
             'id_spp'=>$request->id_spp,
             'jumlah_bayar'=> $jumlahbayar,
             'is_admin' => $request->is_admin,
        ]);
       }

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
    // public function edit($id)
    // {
    //     $data = [
    //         "titleside" => '-', 
    //         "titlepage" => "Edit Transaksi",
    //         "pageside" => "Menu",
    //         "data_transaksi" => Transaksi::find($id)
    //     ];
    //     return view('transaksi.edit', $data);
    // }

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
