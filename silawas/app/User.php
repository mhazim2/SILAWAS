<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    const CREATED_AT = 'dateCreate';
    const UPDATED_AT = 'dateUpdate';
    
    protected $table = 'user';

    protected $fillable = [
        'id','username', 'passwordHash', 'authKey', 'accessToken', 'status', 'passwordResetToken', 'email', 'accessRoleId',
        'dateCreate','dateUpdate','Orang_idOrang' 
    ];

    protected $hidden = [
        'passwordHash', 'authKey','accessToken','passwordResetToken'
    ];

    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function getAuthPassword()
    {
        return $this->passwordHash;
    }
}
