<?php namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Login extends Authenticatable
{
    use Notifiable;

    protected $fillable = ['name', 'password'];
    protected $hidden = ['password'];
    protected $primaryKey = 'id';
    protected $table = "accounts";

}