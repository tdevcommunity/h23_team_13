<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class Admin extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'avatar',
        'nom',
        'prenom',
        'email',
        'telephone',
        'status',
        'role',
        'password',
    ];


    protected $hidden = [
        'password',
        'remember_token',
    ];
}
