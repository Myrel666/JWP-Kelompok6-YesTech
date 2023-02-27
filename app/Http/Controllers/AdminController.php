<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    // show dashboard
    public function index()
    {
        return view('admin.dashboard');
    }

    // show dashboard destinasi
    public function destinasi()
    {
        return view('admin.destinasi');
    }

    // show dashboard
    public function kuliner()
    {
        return view('admin.kuliner');
    }

}
