<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Voyage extends Model
{
    use HasFactory;

    protected $fillable = [
        'date',
        'heure',
        'nbre',
        'code',
        'pin',
        'ligne_id',
        'user_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    
    public function passagers()
    {
        return $this->hasMany(VoyageLigne::class)->with('user');
    }

    public function ligne()
    {
        return $this->belongsTo(Ligne::class, 'ligne_id');
    }
}
