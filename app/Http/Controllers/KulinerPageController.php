<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KulinerPageController extends Controller
{
    // public function kuliner()
    //     {
    //     $kuliner = Kuliner::all();
    //     return view('kuliner',compact('kuliner'));
    //     }
    public function kuliner(Request $request){
        if($request->has('search')){
            $kuliner = Kuliner::where('name','LIKE','%'.$request->search.'%')
            ->orwhere('address','LIKE','%'.$request->search.'%')->paginate(9);
        }else{
            $kuliner = Kuliner::paginate(9);
        }
        return view('kuliner',compact('kuliner'));
    }
}