<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VoyageLigne extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'voyage_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function voyage()
    {
        return $this->belongsTo(Voyage::class, 'voyage_id')->with('ligne','user');
    }

}
