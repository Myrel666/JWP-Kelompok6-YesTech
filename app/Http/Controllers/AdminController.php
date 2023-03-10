<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
use App\Models\Kuliner;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    // show dashboard
    public function index()
    {
        $user = User::all();
        $destinasi = Destination::all();
        $kuliner = Kuliner::all();
        return view('admin.dashboard', compact('user', 'destinasi', 'kuliner'));
    }

    // show navigasi destinasi
    public function destinasi()
    {
        return view('admin.destinasi');
    }

    // show tambah destinasi
    public function destinasiForm()
    {
        return view('admin.destinasiform');
    }

    // show navigasi kuliner
    public function kuliner()
    {
        return view('admin.kuliner');
    }

    // show navigasi kuliner
    public function kulinerForm()
    {
        return view('admin.kulinerform');
    }
}