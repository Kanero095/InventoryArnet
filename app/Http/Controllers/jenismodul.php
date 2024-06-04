<?php

namespace App\Http\Controllers;

use App\Models\jenismodul as ModelsJenismodul;
use Illuminate\Http\Request;

class jenismodul extends Controller
{
    public function input(Request $request){
        $tgl = date('d-m-Y');

        $jenis = new ModelsJenismodul();
        $jenis->user=$request->user;
        $jenis->jenismodul=$request->jenismodul;
        $jenis->tanggal=$tgl;

        $jenis->save();
        return redirect('/jenis-modul');
    }
}
