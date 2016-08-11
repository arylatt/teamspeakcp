<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    protected $fillable = ['user_username', 'user_email', 'user_password', 'user_name'];
    protected $hidden = ['user_password', 'remember_token'];

    public function getAuthPassword()
    {
        return $this->user_password;
    }
}
