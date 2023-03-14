<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Histori extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Histori Pembayaran",
            "pageside" => "Menu",
            "data_transaksi" => Transaksi::join('siswa', 'siswa.id_siswa','=','pembayaran.id_siswa')
                                        ->join('kelas', 'kelas.id_kelas', '=', 'siswa.id_kelas')
                                        ->join('spp', 'spp.id_spp', '=', 'siswa.id_spp')
                                        ->get()
        ];
        return view('histori.index', $data);
    }
}


