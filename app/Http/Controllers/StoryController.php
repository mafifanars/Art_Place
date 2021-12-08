<?php

namespace App\Http\Controllers;

use App\Models\Story;
use App\Models\Place;
use App\Models\CategoryStories;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class StoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $stories = Place::findOrFail($id)->category_stories()->get();

        return view('stories', compact('stories'));
    }

    public function detail($id, $idstory)
    {
        CategoryStories::where('place_id', $id)->where('story_id', $idstory)->firstOrFail(); //cek apakah story dan place sudah sesuai
        $story = Story::findOrFail($id); //cari detail story
        $count = Place::find($idstory)->category_stories()->where('story_id', '<>', $id)->count(); //jumlah story pada place yang sama
        $stories = Place::find($idstory)->category_stories()->where('story_id', '<>', $id)->offset(rand(0, $count-6))->limit(6)->get(); //musuem lain pada place yang sama
        $allplace = Place::where('id','<>',$id)->paginate(5); //daftar semua place
        
        // if(Auth::check())
        // {
        //     $liked = User::find(Auth::user()->id)->favourites()->where('fav_id',2)->where('item_id', $id)->count();
        // }
        // else
        // {
        //     $liked = -1;
        // }

        return view('showstory', compact('story', 'count', 'stories', 'allplace'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addstory', [
            'category_story' => CategoryStories::all(),
            'place' => Place::orderBy('id', 'DESC')->first()
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
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img');
        }

        // $place_id = (int)$request->place_id;

        // $validatedData['story_id'] = [];

        Story::create($validatedData);

        $idStory = Story::orderBy('id', 'DESC')->first();

        // $placeId = $request->place_id;

        CategoryStories::create([
            'story_id' => $idStory->id,
            'place_id' => (int)$request->place_id
        ]);

        return redirect('/story/'. $request->place_id)->with('success','Cerita berhasil ditambah');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function show(Story $story)
    {
        return view('showstory');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function edit(Story $story)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Story $story)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Story  $story
     * @return \Illuminate\Http\Response
     */
    public function destroy(Story $story)
    {
        //
    }
}
