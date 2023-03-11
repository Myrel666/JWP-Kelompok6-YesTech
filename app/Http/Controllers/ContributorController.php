<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Destination;
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

    // show tambah destinasi
    public function destinasiForm()
    {
        return view('contributor.destinasiform');
    }
}