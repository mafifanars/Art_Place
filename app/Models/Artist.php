<?php

namespace App\Models;

use App\Models\Art;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Artist extends Model
{
    use HasFactory;
    
    protected $guarded = ['id'];

    public function art()
    {
        return $this->hasMany(Art::class);
    }
}
