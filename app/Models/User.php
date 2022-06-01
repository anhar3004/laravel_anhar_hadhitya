<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Authenticatable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;

class User extends  Model implements AuthenticatableContract
{
    use Authenticatable;
    use HasFactory;
    protected $table = 'users';
    protected $fillable = ['id','username','password','remember_token','created_at','updated_at'];
}
