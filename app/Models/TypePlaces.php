<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypePlaces extends Model
{
    use HasFactory;

    public function places()
    {
        return $this->hasMany(Places::class);
    }
}
