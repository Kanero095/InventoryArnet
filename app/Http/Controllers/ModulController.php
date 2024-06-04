<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ModulController extends Controller
{
    public function create_nape()
    {
        return view('modul.namaperangkat');
    }

    public function create_namo()
    {
        return view('modul.namamodul');
    }

    public function create_jemo()
    {
        return view('modul.jenismodul');
    }

    public function create_type()
    {
        return view('modul.type');
    }

    public function create_lope()
    {
        return view('modul.lokasipenyimpanan');
    }
}
