<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\KelasModel;

class Kelas extends Controller
{
    //
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Data Kelas",
            "pageside" => "Menu",
            "data_kelas" => KelasModel::all()
        ];
        return view("kelas.index", $data);
    }
}
