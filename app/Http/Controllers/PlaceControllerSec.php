<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class PlaceControllerSec extends Controller
{
    public function detail($id)
    {
        dd($id);
        // $mediums = Medium::findOrFail($id);
        $place = Place::findOrFail($id); 
        $count_museum = Place::find($id)->category_museums()->count(); //cari detail musuem
        $count_story = Place::find($id)->category_stories()->count(); //story yang ada pada item tersebut
        $museums = Place::find($id)->category_museums()->orderBy('museum_id', 'DESC')->paginate(5); //jumlah story pada place yang sama
        $stories = Place::find($id)->category_stories()->orderBy('story_id', 'DESC')->paginate(12); //story lain pada place yang sama
        $places = Place::where('id','<>',$id)->paginate(5); //daftar semua place
        
        return view("showplace", compact('place','count_museum','count_story','museums', 'stories', 'places'));
    }
}
