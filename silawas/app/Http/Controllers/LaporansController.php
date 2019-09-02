<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LaporansController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('laporan.index');
    }

    public function content()
    {
        return redirect('/laporan')->with('content', 'true');
    }
}
