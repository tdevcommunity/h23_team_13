<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ligne extends Model
{
    use HasFactory;


    protected $fillable = [
        'nom',
        'intitule',
        'kilometre',
        'distance',
        'arret',
        'status'
    ];

    public function honoraire()
    {
        return $this->hasMany(Honoraire::class)->orderBy('heure','ASC');
    }
}
