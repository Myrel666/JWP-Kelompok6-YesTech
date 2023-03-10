<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KulinerPageController extends Controller
{
    public function kuliner()
        {
            return view('kuliner');
        }
}
