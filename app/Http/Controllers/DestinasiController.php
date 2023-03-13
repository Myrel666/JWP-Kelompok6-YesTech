<?php

namespace App\Http\Controllers;

use App\Models\Destination;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DestinasiController extends Controller
{
    //
    public function destinasi()
        {
        return view('destinasi');
        }
        
}