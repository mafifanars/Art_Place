<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Museum;
use App\Models\Story;
use App\Models\TypePlaces;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PlaceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $places = Place::orderBy('id','DESC')->get();
        return view("home", compact('places'));

        // SELECT * FROM `places` ORDER BY `id` DESC
    }

}
