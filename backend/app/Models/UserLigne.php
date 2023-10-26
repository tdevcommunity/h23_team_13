<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserLigne extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ligne_id',
        'status',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }

    public function ligne()
    {
        return $this->belongsTo(Ligne::class, 'ligne_id')->with('honoraire');
    }

}
