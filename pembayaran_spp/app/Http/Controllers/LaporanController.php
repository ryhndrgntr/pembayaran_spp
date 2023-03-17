<?php

namespace App\Http\Controllers;

use App\Models\Transaksi;
use Illuminate\Http\Request;
use Carbon\Carbon;
use PDF;

class LaporanController extends Controller
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
            "titlepage" => "Laporan",
            "pageside" => "Menu",
            "data_transaksi" => Transaksi::join('siswa', 'siswa.id_siswa', '=', 'pembayaran.id_siswa')->leftJoin('kelas', 'kelas.id_kelas', '=', 'siswa.id_kelas')->get()
        ];
        return view('laporan.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function laporan(Request $request)
    {
        $startDate = $request->start_date ;
        $endDate = $request->end_date;
        if($endDate== null) {
            $endDate = Carbon::today();
        }
        if ($startDate == null) {
            $data_transaksi = Transaksi::join('users', 'users.id', '=', 'pembayaran.id_petugas')->join('siswa', 'siswa.id_siswa', '=', 'pembayaran.id_siswa')->leftJoin('kelas', 'kelas.id_kelas', '=', 'siswa.id_kelas')->get();
            $data = compact('data_transaksi');
            return view('laporan.cetak', $data);
        }
        if ($startDate != null) {
            // YourModel::whereBetween('created_at', [$startDate, $endDate])->get();
            $data_transaksi = Transaksi::whereBetween('tgl_bayar', [$startDate, $endDate] )->join('users', 'users.id', '=', 'pembayaran.id_petugas')
                                        ->join('siswa', 'siswa.id_siswa', '=', 'pembayaran.id_siswa')
                                        ->leftJoin('kelas', 'kelas.id_kelas', '=', 'siswa.id_kelas')->get();
            $data = compact('data_transaksi');
            return view('laporan.cetak', $data);
        }

        // dd($request->all());
        // $pdf = PDF::loadview('laporan.cetak', $data);
        // return $pdf->stream();
    }
}
