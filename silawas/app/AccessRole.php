<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AccessRole extends Model
{
    protected $table = 'accressrole';

    protected $fillable = [
        'id',
        'roleName',
        'roleDescription',
        'ruleSetting',
        'dateCreate',
        'dateUpdate'
      ];
}
