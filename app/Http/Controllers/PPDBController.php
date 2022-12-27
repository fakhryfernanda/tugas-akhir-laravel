<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function index()
    {
        return view('ppdb.index');
    }

    public function hasil()
    {
        return view('ppdb.hasil');
    }
}
