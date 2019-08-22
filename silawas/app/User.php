<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */

    const CREATED_AT = 'dateCreate';
    const UPDATED_AT = 'dateUpdate';

    protected $table = 'user';

    protected $fillable = [
        'id','username', 'passwordHash', 'authKey', 'accessToken', 'status', 'passwordResetToken', 'email', 'accessRoleId',
        'dateCreate','dateUpdate','Orang_idOrang' 
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'passwordHash', 'authKey','accessToken','passwordResetToken'
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
