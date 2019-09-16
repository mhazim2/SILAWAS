<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SikolamController extends Controller
{
    public function index()
    {
        return view('sikolam.index');
    }

    public function laporan()
    {
        return view('sikolam.laporan');
    }

    public function login()
    {
        return view('sikolam.login');
    }
}
