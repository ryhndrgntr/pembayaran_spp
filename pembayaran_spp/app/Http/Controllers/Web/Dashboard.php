<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function admin()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Admin",
        ];
        return view("dashboard.admin.index", $data);
    }
    public function petugas()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Petugas",
        ];
        return view("dashboard.petugas.index", $data);
    }
    public function siswa()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Siswa",
        ];
        return view("dashboard.siswa.index", $data);
    }

    
}