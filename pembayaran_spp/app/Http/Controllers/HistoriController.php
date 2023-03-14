<?php

namespace App\Http\Controllers;

use App\Models\SiswaModel;
use App\Models\KelasModel;
use App\Models\SPPModel;
use App\Models\Transaksi;
use Session;
use Illuminate\Http\Request;

class HistoriController extends Controller
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
                                        ->leftJoin('users', 'users.id','=','siswa.id_users')
                                        ->get()
        ];
        return view('histori.index', $data);
    }

}
