<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SikolamController extends Controller
{
    public function dashboard()
    {
        return view('sikolam.dashboard', [
            'sikolam' => true
        ]);
    }
    
    public function pengawas()
    {
        return view('sikolam.pengawas', [
            'sikolam' => true
            ]);
        }

    public function aduan()
    {
        return view('sikolam.aduan', [
            'sikolam' => true
        ]);
    }

    public function detailAduan()
    {
        return view('sikolam.detail-aduan', [
            'sikolam' => true
        ]);
    }
        
    public function laporan()
    {
        return view('sikolam.laporan');
    }

    public function index()
    {
        return view('sikolam.index');
    }    

    public function login()
    {
        return view('sikolam.login');
    }
}
