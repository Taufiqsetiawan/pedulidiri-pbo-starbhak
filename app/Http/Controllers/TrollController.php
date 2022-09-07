<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrollController extends Controller
{
    public function index()
    {
        return view('troll');
    }
}
