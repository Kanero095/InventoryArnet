<?php

namespace App\Http\Controllers;

use App\Models\namaperangkat as ModelsNamaperangkat;
use Illuminate\Http\Request;

class namaperangkat extends Controller
{
    public function input(Request $request){
        $tgl = date('d-m-Y');

        $perangkat = new ModelsNamaperangkat();
        $perangkat->user=$request->user;
        $perangkat->namaperangkat=$request->namaperangkat;
        $perangkat->tanggal=$tgl;

        $perangkat->save();
        return redirect('/nama-perangkat');
    }
}
