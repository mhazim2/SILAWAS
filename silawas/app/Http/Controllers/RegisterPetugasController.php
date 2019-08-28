<?php

namespace App\Http\Controllers;

use App\User;
use App\Orang;
use App\PengawasKesmavet;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Http\Request;


class RegisterPetugasController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    
    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'username' => ['required', 'string', 'max:255', 'unique:user'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:user'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(Request $data)
    {
    
        $user = User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'passwordHash' => Hash::make($data['password']),
            'authKey' => '123',
            'status' => 10,
            'accessRoleId' => 7
        ]);
        
        $orangID = Orang::create([
            'NamaLengkap' => $data['NamaLengkap'],
            'NomorHandphone	' => $data['NomorHandphone'],
        ]);
        
        $user->Orang_idOrang = $orangID->id;
        $user->save();

        // $pengawas = PengawasKesmavet::create([
        //     'idPengawasKesmavet' => $user->id,
        //     'isActive	' => FALSE,
        // ]);

        //return dd($pengawas);
        return view('petugas.index');
    }
}
