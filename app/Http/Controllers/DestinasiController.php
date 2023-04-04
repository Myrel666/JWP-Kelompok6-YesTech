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
    public function destinasi()
        {
        $destinasi = Destination::all();
        return view('destinasi', compact('destinasi'));
        }
        
}