<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CategoryStories extends Model
{
    public function story()
    {
        return $this->belongsTo(Story::class);
    }

    public function place()
    {
        return $this->belongsTo(Place::class);
    }
}
