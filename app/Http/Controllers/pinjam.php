<?php

namespace App\Http\Controllers;

use App\Models\pinjam as ModelsPinjam;
use App\Models\spare;
use Illuminate\Http\Request;

class pinjam extends Controller
{
    public function index(){
        return view('pinjam.read-spare',[
            'pinjam' => ModelsPinjam::all()
        ]);
    }

    public function read(string $id, Request $request){
        $data = ModelsPinjam::where('id_kodespare',$id)->get();
        return view('pinjam.read-spare',[
            'data'=>$data
        ]);
    }

    public function edit(string $id, Request $request){
        $data = spare::where('id',$id)->get();
        return view('pinjam.edit-pinjam',[
            'data'=>$data
        ]);
    }

    public function save(Request $request){
        $pinjam = new ModelsPinjam();
        $pinjam->id_kodespare = $request->id_kodespare;
        $pinjam->namamodul= $request->namamodul;
        $pinjam->tanggalpenggunaan = $request->tanggalpenggunaan;
        $pinjam->jumlahpengunaan=$request->jumlahpenggunaan;
        $pinjam->penggunaan = $request->penggunaan;

        $pinjam->save();
        return redirect('/read-spare');
    }
}
