<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ObjetPerdu extends Model
{
    protected $fillable = [
        'user_id', 'titre', 'description', 'lieu', 'date', 'image', 'latitude', 'longitude',
    ];
    
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
