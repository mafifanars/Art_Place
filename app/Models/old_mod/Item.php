<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function place(){
        return $this->belongsTo(Place::class);
    }

    public function museum(){
        return $this->belongsTo(Museum::class);
    }

    public function story(){
        return $this->belongsTo(Story::class);
    }

    public function art(){
        return $this->belongsTo(Art::class);
    }

    public function artist(){
        return $this->belongsTo(Artist::class);
    }
}
