<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Transaksi extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => '-', 
            "titlepage" => "Data Transaksi",
            "pageside" => "Menu",
            "data_transaksi" => Transaksi::all()
        ];
        return view("transaksi.index", $data);
    }
}
