<?php

namespace App\Http\Controllers;

use App\Models\lokasipenyimpanan as ModelsLokasipenyimpanan;
use Illuminate\Http\Request;

class lokasipenyimpanan extends Controller
{
    public function input(Request $request){
        $tgl = date('d-m-Y');

        $lokasi = new ModelsLokasipenyimpanan();
        $lokasi->user=$request->user;
        $lokasi->lokasipenyimpanan=$request->lokasipenyimpanan;
        $lokasi->tanggal=$tgl;

        $lokasi->save();
        return redirect('/lokasi-penyimpanan');
    }
}
