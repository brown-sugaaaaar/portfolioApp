<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TopController extends Controller
{
    public function index () {
        return view('top');
    }
    

    public function reference () {
        return view('references.index');
    }
}
