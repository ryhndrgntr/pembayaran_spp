<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\PetugasModel;

class Data_Petugas extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Data Petugas",
            "pageside" => "Menu",
            "data_petugas" => PetugasModel::whereNotIn("level", ["Admin"])->get()
        ];
        return view("petugas.index", $data);
    }
}
