<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PengajuansController extends Controller
{
    public function index()
    {
        return view('pengajuan.index');
    }

    public function formulir()
    {
        return view('pengajuan.formulir');
    }

    public function form9()
    {
        return view('pengajuan.formulir-9');
    }
}
