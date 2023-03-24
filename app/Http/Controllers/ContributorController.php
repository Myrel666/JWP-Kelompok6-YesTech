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
    public function datadestinasi()
    {
        $destinasi = Destination::all();
        return view('contributor.datadestinasi', compact('destinasi'));
    }

    // show tambah destinasi
    public function destinasiForm()
    {
        return view('contributor.destinasiform');
    }
    public function insertdestinasi(Request $request){
        // dd($request);
    $destinasi = Destination::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
        $destinasi->foto = $request->file('foto')->getClientOriginalName();
        $destinasi->save();
        }
        return redirect()->route('contributor.datadestinasi')->with('success', 'Data Berhasil Di Tambahkan');
    }
    
    public function editdestinasi($id){
        $destinasi = Destination::find($id);
        // dd($data);
        return view('contributor.editdestinasi',compact('destinasi'));
    }
    public function updatedestinasi(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $destinasi = Destination::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotodestinasi/',$request->file('foto')->getClientOriginalName());
            $destinasi->foto = $request->file('foto')->getClientOriginalName();
        }
        $destinasi->name = $request->name;
        $destinasi->address = $request->address;
        $destinasi->kategori = $request->kategori;
        $destinasi->description = $request->description;

        $destinasi->save();
        return redirect()->route('contributor.datadestinasi')->with('success', 'Data Berhasil Di Edit');
     }

     
    // show navigasi kuliner
    public function datakuliner()
    {
        $kuliner = Kuliner::all();
        return view('contributor.datakuliner',compact('kuliner'));
    }

    // show navigasi kuliner
    public function kulinerform()
    {
        return view('contributor.kulinerform');
    }
    public function insertkuliner(Request $request){
        // dd($request);
    $kuliner = Kuliner::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('fotokuliner/',$request->file('foto')->getClientOriginalName());
        $kuliner->foto = $request->file('foto')->getClientOriginalName();
        $kuliner->save();
        }
        return redirect()->route('contributor.datakuliner')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function editkuliner($id){
        $kuliner = Kuliner::find($id);
        // dd($data);
        return view('contributor.editkuliner',compact('kuliner'));
    }
    public function updatekuliner(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $kuliner = Kuliner::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotokuliner/',$request->file('foto')->getClientOriginalName());
            $kuliner->foto = $request->file('foto')->getClientOriginalName();
        }
        $kuliner->name = $request->name;
        $kuliner->address = $request->address;
        $kuliner->kategori = $request->kategori;
        $kuliner->description = $request->description;

        $kuliner->save();
        return redirect()->route('contributor.datakuliner')->with('success', 'Data Berhasil Di Edit');
     }
}