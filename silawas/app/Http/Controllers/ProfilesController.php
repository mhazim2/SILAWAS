<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfilesController extends Controller
{
    public function index($user)
    {
        $user = User::findorFail($user);
        if ($user->id != auth()->user()->id) abort(403);

        return view('profile.index', [
            'user' => $user,
        ]);
    }

    public function edit($user)
    {
        $user = User::findorFail($user);
        if ($user->id != auth()->user()->id) abort(403);

        return view('profile.edit', [
            'user' => $user,
        ]);
    }
}
