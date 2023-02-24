<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class Dashboard extends Controller
{
    public function admin()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Admin",
            "name_user" => Auth::user()->name,
        ];
        return view("dashboard.admin.index", $data);
    }
    public function petugas()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Petugas",
            "name_user" => Auth::user()->name,
        ];
        return view("dashboard.petugas.index", $data);
    }
    public function siswa()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu",
            "sentences" => "Siswa",
            "name_user" => Auth::user()->name,
        ];
        return view("dashboard.siswa.index", $data);
    }

    
    
}