<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
use App\Models\Kuliner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ContributorController extends Controller
{
        // show dashboard
        public function index()
        {
            $user = User::all();
            $destinasi = Destination::all();
        return view('contributor.dashboard', compact('user', 'destinasi'));
        }
            // show navigasi destinasi
    public function destinasi()
    {
        return view('contributor.destinasi');
    }
    // public function insertdestinasi(Request $request){
    //     $data = Destination::create($request->all());
    //     if($request->hasFile('foto')){
    //         $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
    //         $data->foto = $request->file('foto')->getClientOriginalName();
    //         $data->save();
    //     }
    //     return redirect()->route('data_destinasi');
    // }

    // show tambah destinasi
    public function destinasiForm()
    {
        return view('contributor.destinasiform');
    }
    // show navigasi kuliner
    public function kuliner()
    {
        return view('contributor.kuliner');
    }

    // show navigasi kuliner
    public function kulinerform()
    {
        return view('contributor.kulinerform');
    }
}