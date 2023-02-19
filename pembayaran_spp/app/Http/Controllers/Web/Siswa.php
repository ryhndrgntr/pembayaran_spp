<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SiswaModel;

class Siswa extends Controller
{
    //
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
}
