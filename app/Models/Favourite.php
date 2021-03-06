<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
     use HasFactory;

     protected $guarded = ['id'];

     public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }

    public function museum()
    {
        return $this->belongsTo(Museum::class);
    }

    public function category_museums()
    {
        return $this->belongsTo(CategoryMuseums::class);
    }

    public function story()
    {
        return $this->belongsTo(Story::class);
    }
}
