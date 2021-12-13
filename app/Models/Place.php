<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    use HasFactory;

    protected $guarded = ['id'];

    public function category_museums()
    {
        return $this->hasMany(CategoryMuseums::class);
    }

    public function category_stories()
    {
        return $this->hasMany(CategoryStories::class);
    }

    public function type_place()
    {
        return $this->belongsTo(TypePlaces::class);
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

}
