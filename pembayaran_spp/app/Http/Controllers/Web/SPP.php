<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SPPModel;

class SPP extends Controller
{
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
}
