<?php

namespace App\Http\Controllers;

use App\Models\Place;
use App\Models\Museum;
use App\Models\Story;
use App\Models\TypePlaces;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class PlaceControllerSec extends Controller
{
    public function index()
    {
        $places = Place::orderBy('id','DESC')->get();
        return view("home", compact('places'));

        // SELECT * FROM `places` ORDER BY `id` DESC
    }

    public function detail($id)
    {
        $place = Place::findOrFail($id); 
        $count_museum = Place::find($id)->category_museums()->count(); //cari detail musuem
        $count_story = Place::find($id)->category_stories()->count(); //story yang ada pada item tersebut
        $museums = Place::find($id)->category_museums()->orderBy('museum_id', 'DESC')->paginate(5); //jumlah story pada place yang sama
        $stories = Place::find($id)->category_stories()->orderBy('story_id', 'DESC')->paginate(12); //story lain pada place yang sama
        $places = Place::where('id','<>',$id)->paginate(5); //daftar semua place
        
        return view("showplace", compact('place','count_museum','count_story','museums', 'stories', 'places'));
    }

    public function create()
    {
        return view('addplace', [
            'type_places' => TypePlaces::all()
        ]);
    }

    public function add(Request $request)
    {
        
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

    public function edit(Request $request, $id)
    {
        
        $editplace = Place::where('id', $id)->first();

        return view('editplace', [
            'place' => $editplace,
            'type_places' => TypePlaces::all()
        ]);
    }

    public function update(Request $request, Place $place)
    {
        $rules = [
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ];

        
        $validatedData = $request->validate($rules);
        
        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img');
        }

        $validatedData['type_place_id'] = $request->type_places;
        
        Place::where('id', $request->place_id)
            ->update($validatedData);

        return redirect('/place/'. $request->place_id)->with('success', 'Tempat berhasil diubah!');;
    }

    public function destroy(Request $request)
    {
        $placeId = $request->place_id;

        Place::destroy($placeId);
        return redirect('/place')->with('success', 'Tempat berhasil dihapus!');
    }

    public function sortTime()
    {
        $places = Place::orderBy('created_at','DESC')->get();
        return view("home", compact('places'));
    }

    public function sortAlpha()
    {
        $places = Place::orderBy('name','ASC')->get();
        return view("home", compact('places'));
    }

    public function search(Request $request)
    {
        if($request->keyword == "")
        {
            $places = Place::orderBy('id', 'DESC')->get();
            return view("home", compact('places'));
        }
        else
        {
            $places = Place::where('name', 'like', "%".$request->keyword."%")->orderBy('id', 'DESC')->get();

            $keyword = $request->keyword;

            $museums = Museum::where('name','like',"%".$keyword."%")->get();

            $stories = Story::where('title','like',"%".$keyword."%")->get();

            return view("search", compact('places', 'museums', 'stories', 'keyword'));
        }
    }

}
