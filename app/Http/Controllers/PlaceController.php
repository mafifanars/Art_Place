<?php

namespace App\Http\Controllers;

use App\Models\Place;
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
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addplace', [
            'type_places' => TypePlaces::all()
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // $validatedData = $request->validate([
        //     'name' => 'required|string|max:255',
        //     'desc' => 'required|string',
        //     'image' => 'required|image|mimes:jpg,png,jpeg|max:10240'
        // ]);

        // if($request->file('image')){
        //     $validatedData['image'] = $request->file('image')->store('img');
        // }

        // $validatedData['type_place_id'] = $request->type_places;

        // Place::create($validatedData);

        // return redirect('/place')->with('status','Tempat berhasil ditambah');

        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024',
            'type_places' => 'required'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $validatedData['type_place_id'] = $request->type_places;
        
        Place::create($validatedData);

        return redirect('/place')->with('success', 'Tempat berhasil ditambah!');
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
        // return view('editplace');
        return view('editplace', [
            'place' => $place,
            'type_places' => TypePlaces::all()
        ]);
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
        $rules = [
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024',
            // 'type_places' => 'required'
        ];

        $validatedData = $request->validate($rules);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $validatedData['type_place_id'] = $request->type_places;
        
        Place::where('id', $place->id)
            ->update($validatedData);

        return redirect('/place/'. $place->id)->with('success', 'Tempat berhasil diubah!');;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Place  $place
     * @return \Illuminate\Http\Response
     */
    public function destroy(Place $place)
    {
        Place::destroy($place->id);
        return redirect('/place')->with('success', 'Tempat berhasil dihapus!');
    }
}
