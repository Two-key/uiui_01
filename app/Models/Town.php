<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Town extends Model
{
    use HasFactory;
    
    public function shops()
    {
        return $this->hasMany(Shop::class);
    }
    public function rules()
    {
        return $this->hasMany(Rule::class);
    }
    public function mytowns()
    {
        return $this->hasMany(Mytown::class);
    }
    public function articles()
    {
        return $this->hasMany(Article::class);
    }
    public function troubles()
    {
        return $this->hasMany(Trouble::class);
    }
}
