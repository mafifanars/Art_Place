<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Museum extends Model
{
    use HasFactory;
    protected $table = "museums";
    protected $fillable = [
        'art_id','name', 'desc', 'image'];
}
