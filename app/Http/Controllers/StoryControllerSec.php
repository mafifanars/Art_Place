<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Story;
use App\Models\CategoryStories;
use App\Models\Place;
use App\Models\CategoryMuseums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;

class StoryControllerSec extends Controller
{
    public function detail($id, $idstory)
    {

        $placeId = $id;

        CategoryStories::where('place_id', $id)->where('story_id', $idstory)->firstOrFail(); //cek apakah story dan place sudah sesuai
        $story = Story::findOrFail($id); //cari detail story
        $count = Place::find($idstory)->category_stories()->where('story_id', '<>', $id)->count(); //jumlah story pada place yang sama
        $stories = Place::find($idstory)->category_stories()->where('story_id', '<>', $id)->offset(rand(0, $count-6))->limit(6)->get(); //musuem lain pada place yang sama
        $allplace = Place::where('id','<>',$id)->paginate(5); //daftar semua place

        return view('showstory', compact('story', 'count', 'stories', 'allplace', 'placeId'));
    }

    public function edit(Request $request, $id, $idplace)
    {
        // dd($id, $idplace);
        $editstory = Story::where('id', $id)->first();
        // dd($editstory);
        return view('editstory', [
            'editstory' => $editstory,
            'idplace' => (int)$idplace
        ]);
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ]);

        // dd($request->place_id);


        Story::where('id', $request->story_id)
            ->update($validatedData);

        return redirect('/story/'. $request->story_id .'/'. $request->place_id)->with('success','Cerita berhasil diedit');
    }

    public function destroy(Request $request)
    {
        // dd($request->museum_id, $request->place_id);
        Story::destroy($request->story_id);
        CategoryStory::destroy($request->story_id);

        return redirect('/place/'. $request->place_id)->with('success', 'Cerita berhasil dihapus!');
    }
}
