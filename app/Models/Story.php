<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Story extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'desc', 'image'];

    public function category_stories()
    {
        return $this->hasMany(CategoryStories::class);
    }

    public function favourites()
    {
        return $this->hasMany(Favourite::class);
    }

}
