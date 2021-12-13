<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\User;
use App\Models\CategoryStories;
use App\Models\Place;
use App\Models\CategoryMuseums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StoryControllerSec extends Controller
{
    public function create($id)
    {
        $addstory = Story::where('id', $id)->first();

        return view('addstory', [
            'category_story' => CategoryStories::all(),
            'place_id' => $id
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ]);
        
        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img');
        }

        Story::create($validatedData);

        $idStory = Story::orderBy('id', 'DESC')->first();

        CategoryStories::create([
            'story_id' => $idStory->id,
            'place_id' => $request->place_id
        ]);

        return redirect('/place/'. $request->place_id)->with('success','Cerita berhasil ditambah');
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

    public function detail($idstory, $idplace)
    {
        $user_id = auth()->user()->id;    
        $place_id = $idplace;
        $story_id = $idstory;

        CategoryStories::where('place_id', $place_id)->where('story_id', $story_id)->firstOrFail(); //cek apakah story dan place sudah sesuai
        $story = Story::findOrFail($story_id); //cari detail story
        $count = Place::find($place_id)->category_stories()->where('story_id', '<>', $story_id)->count(); //jumlah story pada place yang sama
        $stories = Place::find($place_id)->category_stories()->where('story_id', '<>', $story_id)->offset(rand(0, $count-6))->limit(6)->get(); //cerita lain pada place yang sama
        $allplace = Place::where('id','<>',$place_id)->paginate(5); //daftar semua place
        
        if(User::find($user_id))
        {
            $liked = User::find($user_id)->favourites()->where('fav_id',3)->where('story_id', $story_id)->count();
        }
        else
        {
            $liked = -1;
        }

        return view('showstory', compact('story', 'count', 'stories', 'allplace', 'place_id', 'story_id', 'user_id', 'liked'));
    }

    public function edit(Request $request, $id, $idplace)
    {
        $editstory = Story::where('id', $id)->first();

        return view('editstory', [
            'editstory' => $editstory,
            'idplace' => (int)$idplace
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img');
        }

        Story::where('id', $request->story_id)
            ->update($validatedData);

        return redirect('/story/'. $request->story_id .'/'. $request->place_id)->with('success','Cerita berhasil diedit');
    }

    public function destroy(Request $request)
    {
        Story::destroy($request->story_id);
        CategoryStories::destroy($request->story_id);

        return redirect('/place/'. $request->place_id)->with('success', 'Cerita berhasil dihapus!');
    }
}
