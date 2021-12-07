<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryMuseums extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
