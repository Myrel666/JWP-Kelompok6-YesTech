<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
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
            $kuliner = Kuliner::all();
        return view('contributor.dashboard', compact('user', 'destinasi', 'kuliner'));
        }
            // show navigasi destinasi
    public function destinasi()
    {
        return view('contributor.destinasi');
    }

    // show tambah destinasi
    public function destinasiForm()
    {
        return view('contributor.destinasiform');
    }
    public function insertdestinasi(Request $request){
    $destinasi = Destination::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
        $destinasi->foto = $request->file('foto')->getClientOriginalName();
        $destinasi->save();
        }
        return redirect()->route('contributor.destinasi');
    }
    
    public function updatedestinasi(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $destinasi = Destination::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
            $destinasi->foto = $request->file('foto')->getClientOriginalName();
        }
        $destinasi->nama = $request->nama;
        $destinasi->kategori = $request->kategori;
        $destinasi->alamat = $request->alamat;
        $destinasi->deskripsi = $request->deskripsi;

        $destinasi->save();
        return redirect()->route('contributor.destinasi');
        
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