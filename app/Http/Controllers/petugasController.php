<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class petugasController extends Controller
{
    public function beranda()
    {
        return view('admin.beranda');
    }
}
