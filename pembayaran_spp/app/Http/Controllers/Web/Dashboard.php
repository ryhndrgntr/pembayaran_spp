<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Dashboard extends Controller
{
    public function index()
    {
        $data = [
            "titleside" => "-", 
            "pageside" => "Menu"
        ];
        return view("dashboard.index", $data);
    }
}
