<?php

namespace App\Http\Controllers;

use App\Models\type as ModelsType;
use Illuminate\Http\Request;

class type extends Controller
{
    public function input(Request $request){
        $tgl = date('d-m-Y');

        $type = new ModelsType();
        $type->user=$request->user;
        $type->tipe=$request->tipe;
        $type->tanggal=$tgl;

        $type->save();
        return redirect('/type');
    }
}
