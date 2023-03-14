<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Laporan extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Laporan",
            "pageside" => "Menu",
            'user' => User::find(auth()->user()->id),
            'data_kelas' => KelasModel::orderBy('nama_kelas', 'ASC')->get(),
            'data_transaksi' => DB::select('SELECT pembayaran.id_pembayaran, petugas.nama_petugas, siswa.nama, kelas.nama_kelas, pembayaran.bulan_dibayar, spp.nominal, pembayaran.jumlah_bayar '.
            'FROM pembayaran '.
            'INNER JOIN petugas ON pembayaran.id_petugas = petugas.id_petugas '.
            'INNER JOIN siswa ON pembayaran.id_siswa = siswa.id_siswa '.
            'INNER JOIN kelas ON siswa.id_kelas = kelas.id_kelas '.
            'INNER JOIN spp ON pembayaran.id_spp = spp.id_spp;')
        ];
        return view("laporan.index", $data);
    }
}
