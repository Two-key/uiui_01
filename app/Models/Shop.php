<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shop extends Model
{
    use HasFactory;
    
    public function town()
    {
        return $this->belongsTo(Town::class);
    }
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
