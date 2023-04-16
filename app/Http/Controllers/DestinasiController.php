<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use App\Models\User;
use App\Models\Category;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinasiController extends Controller
{
    //
    // public function destinasi()
    //     {
    //     $destinasi = Destination::paginate(9);
    //     return view('destinasi', compact('destinasi'));
    //     }
    public function destinasi(Request $request){
        if($request->has('search')){
            $destinasi = Destination::where('name','LIKE','%'.$request->search.'%')
            ->orwhere('address','LIKE','%'.$request->search.'%')->paginate(9);
        }else{
            $destinasi = Destination::paginate(9);
        }
        return view('destinasi',compact('destinasi'));
    }
        
}