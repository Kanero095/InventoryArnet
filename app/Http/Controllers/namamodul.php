<?php

namespace App\Http\Controllers;

use App\Models\namamodul as ModelsNamamodul;
use Illuminate\Http\Request;

class namamodul extends Controller
{
    public function input(Request $request){
        $tgl = date('d-m-Y');

        $nama = new ModelsNamamodul();
        $nama->user=$request->user;
        $nama->namamodul=$request->namamodul;
        $nama->tanggal=$tgl;

        $nama->save();
        return redirect('/nama-modul');
    }
}
