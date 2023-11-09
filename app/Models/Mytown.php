<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mytown extends Model
{
    use HasFactory;
    
    public function town()
    {
        return $this->belongsTo(Town::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
