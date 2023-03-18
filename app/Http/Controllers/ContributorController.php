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
        return redirect()->route('contributor.datadestinasi');
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
        $destinasi->area_id = $request->area_id;
        $destinasi->description = $request->description;

        $destinasi->save();
        return redirect()->route('contributor.datadestinasi');
        
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