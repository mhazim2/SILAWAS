<?php

namespace App\Http\Controllers;

use App\User;
use App\Orang;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PetugassController extends Controller
{
    public function index()
    {
        return view('petugas.index');
    }

    public function create()
    {
      
        return view('petugas.create');
    }
}
