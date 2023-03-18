<?php

namespace App\Http\Controllers;

use App\Models\Kuliner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KulinerPageController extends Controller
{
    public function kuliner()
        {
        $kuliner = Kuliner::all();
        return view('kuliner',compact('kuliner'));
        }
}