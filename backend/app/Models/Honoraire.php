<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Honoraire extends Model
{
    use HasFactory;

    protected $fillable = [
        'heure',
        'ligne_id',
        'status',
    ];

    public function ligne()
    {
        return $this->belongsTo(Ligne::class, 'ligne_id');
    }
}
