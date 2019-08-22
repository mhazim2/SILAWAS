<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
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
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

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
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            // 'name' => ['required', 'string', 'max:255'],
            // 'tempat_lahir' => ['required', 'string', 'max:255'],
            // 'tanggal_lahir' => ['required', 'string', 'max:255'],
            // 'no_hp' => ['required', 'string', 'max:255'],
            // 'no_ktp' => ['required', 'string', 'max:255'],
            // 'npwp' => ['required', 'string', 'max:255'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        //$tanggal_lahir = date('Y-m-d', strtotime($data['tanggal_lahir']));
        return User::create([
            'username' => $data['username'],
            'email' => $data['email'],
            'passwordHash' => Hash::make($data['password']),
            'authKey' => '123',
            'status' => 10,
            // 'name' => $data['name'],
            // 'tempat_lahir' => $data['tempat_lahir'],
            // 'tanggal_lahir' => $tanggal_lahir,
            // 'no_hp' => $data['no_hp'],
            // 'no_ktp' => $data['no_ktp'],
            // 'npwp' => $data['npwp'],
        ]);
    }
}
