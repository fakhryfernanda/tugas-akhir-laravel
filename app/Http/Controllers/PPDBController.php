<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PPDBController extends Controller
{
    public function informasi()
    {
        return view('ppdb.informasi');
    }

    public function formulir()
    {
        return view('ppdb.formulir');
    }

    public function hasil()
    {
        return view('ppdb.hasil');
    }
}
