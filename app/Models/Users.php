<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Users extends Model
{
    use HasFactory;

    protected $fillable = [
        'email',
        'password',
        'address',
        'occupation',
        'gender',
        'city',
        'state',
        'zip',
        'check',
    ];

}
