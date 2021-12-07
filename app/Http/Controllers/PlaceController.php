<?php

namespace App\Http\Controllers;

use App\Models\Place;
use Illuminate\Http\Request;

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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $place = Place::findOrFail($id);
        $count_museum = Place::find($id)->category_museums()->count();
        $count_story = Place::find($id)->category_stories()->count();
        $museums = Place::find($id)->category_museums()->orderBy('museum_id', 'DESC')->paginate(5);
        $stories = Place::find($id)->category_stories()->orderBy('story_id', 'DESC')->paginate(12);
        $places = Place::where('id','<>',$id)->paginate(5);
        // if(Auth::check())
        // {
        //     $liked = User::find(Auth::user()->id)->favourites()->where('fav_id',1)->where('place_id', $id)->count();
        // }
        // else
        // {
        //     $liked = -1;
        // }
        return view("showplace", compact('place','count_museum','count_story','museums', 'stories', 'places'));
        // return view('showplace',[
        //     'places' => Place::all()
        // ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function edit(Place $place)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Place $place)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        //
    }
}
