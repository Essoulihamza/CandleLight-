<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasFactory;
    use HasApiTokens;
    use Notifiable;

    protected $table = 'users';
    protected $fillable = [
        'first_name',
        'last_name',
        'user_name',
        'birth_date',
        'image',
        'email',
        'password'
    ];
}
