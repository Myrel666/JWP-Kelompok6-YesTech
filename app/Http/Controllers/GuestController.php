<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GuestController extends Controller
{
    //
    public function destinasi()
        {
            return view('destinasi');
        }
}