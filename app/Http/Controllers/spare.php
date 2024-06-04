<?php

namespace App\Http\Controllers;

use App\Models\jenismodul;
use App\Models\lokasipenyimpanan;
use App\Models\namamodul;
use App\Models\namaperangkat;
use App\Models\pinjam;
use App\Models\spare as ModelsSpare;
use App\Models\type;
use Illuminate\Http\Request;

use function PHPSTORM_META\type;

class spare extends Controller
{

    public function index_home()
    {
        // modul
        $totalmetro = ModelsSpare::where('namaperangkat', 'METRO-E')->count();
        $totaldwdm = ModelsSpare::where('namaperangkat', 'DWDM')->count();
        $totalntera = ModelsSpare::where('namaperangkat', 'N-TERA')->count();
        $totalotn = ModelsSpare::where('namaperangkat', 'OTN')->count();


        // total
        $totalJumlah = ModelsSpare::sum('jumlah');
        $totalpinjam = pinjam::sum('jumlahpengunaan');
        $totaltidakterpakai = $totalJumlah-$totalpinjam;

        return view('home',[
            // modul
            'tome'=>$totalmetro,
            'todwdm'=>$totaldwdm,
            'tontera'=>$totalntera,
            'tootn'=>$totalotn,

            // total
            'topi'=>$totalpinjam,
            'toju'=>$totalJumlah,
            'totiter'=>$totaltidakterpakai,
        ]);
    }

    public function create_spare()
    {
        return view('input-spare');
    }

    public function index_spare(Request $request)
    {
        $DataSpare=ModelsSpare::all();

        if($request->has('search')){
            $DataSpare=ModelsSpare::where('namaperangkat', 'LIKE','%' . $request->search.'%')->get();
        }

        return view('index-spare',compact('DataSpare'));
    }

    public function index_data()
    {

        return view('input-spare',[
            'nape'=>namaperangkat::all(),
            'jemo'=>jenismodul::all(),
            'namo'=>namamodul::all(),
            'type'=>type::all(),
            'lope'=>lokasipenyimpanan::all(),
        ]);
    }

    public function input(Request $request){
        $data = new ModelsSpare();
        $data->user=$request->user;
        $data->namaperangkat=$request->namaperangkat;
        $data->jenismodul=$request->jenismodul;
        $data->namamodul=$request->namamodul;
        $data->tipe=$request->tipe;
        $data->nomorseri=$request->nomorseri;
        $data->lokasipenyimpanan=$request->lokasipenyimpanan;
        $data->tanggalpenyimpanan=$request->tanggalpenyimpanan;
        $data->jumlah=$request->jumlah;

        $data->save();
        return redirect('/input-spare');
    }

    public function destroy($id)
    {
        $data = ModelsSpare::find($id)->delete();
        return redirect('/read-spare');
    }
}
