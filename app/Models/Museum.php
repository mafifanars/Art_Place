<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;

    public function category_museums()
    {
        return $this->hasMany(CategoryMuseums::class);
    }
}
