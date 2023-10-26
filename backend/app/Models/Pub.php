<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pub extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'image',
        'date_debut',
        'date_fin',
        'status',
    ];
}
