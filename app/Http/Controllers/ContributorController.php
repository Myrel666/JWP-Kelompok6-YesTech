<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Category;
use App\Models\Destination;
use App\Models\Kuliner;
use App\Models\Home;
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
            $home = Home::all();
        return view('contributor.dashboard', compact('user', 'destinasi', 'kuliner', 'home'));
        }
    
    // show navigasi destinasi
    public function datadestinasi()
    {
        $destinasi = Destination::paginate(5);
        return view('contributor.datadestinasi', compact('destinasi'));
    }

    public function destinasi(Request $request){
        if($request->has('search')){
            $destinasi = Destination::where('nama','LIKE','%'.$request->search.'%')
            ->orwhere('address','LIKE','%'.$request->search.'%')->paginate(9);
        }else{
            $destinasi = Destination::paginate(9);
        }
        return view('destinasi',compact('destinasi'));
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
     public function deskripsidestinasi($id){
        $destinasi = Destination::find($id);
        return view('deskripsi.deskripsidestinasi',compact('destinasi'));
     }

     
    // show navigasi kuliner
    public function datakuliner()
    {
        $kuliner = Kuliner::paginate(5);
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
     public function deskripsikuliner($id){
        $kuliner = Kuliner::find($id);
        return view('deskripsi.deskripsikuliner',compact('kuliner'));
     }

     
    // show navigasi home
    public function datahome()
    {
        $home = Home::paginate(5);
        return view('contributor.datahome',compact('home'));
    }

    // show navigasi home
    public function homeform()
    {
        return view('contributor.homeform');
    }
    public function inserthome(Request $request){
        // dd($request);
    $home = Home::create($request->all());
    if($request->hasFile('foto')){
        $request->file('foto')->move('fotohome/',$request->file('foto')->getClientOriginalName());
        $home->foto = $request->file('foto')->getClientOriginalName();
        $home->save();
        }
        return redirect()->route('contributor.datahome')->with('success', 'Data Berhasil Di Tambahkan');
    }

    public function edithome($id){
        $home = Home::find($id);
        // dd($home);
        return view('contributor.edithome',compact('home'));
    }
    public function updatehome(Request $request, $id){ 
        // dd($request->file('foto')->getClientOriginalName());
        $home = Home::find($id);
        if ($request->hasFile('foto')){
            $request->file('foto')->move('fotohome/',$request->file('foto')->getClientOriginalName());
            $home->foto = $request->file('foto')->getClientOriginalName();
        }
        $home->name = $request->name;
        $home->address = $request->address;
        $home->kategori = $request->kategori;
        $home->description = $request->description;

        $home->save();
        return redirect()->route('contributor.datahome')->with('success', 'Data Berhasil Di Edit');
     }
     
     public function deskripsihome($id){
        $home = Home::find($id);
        return view('deskripsi.deskripsihome',compact('home'));
     }
}