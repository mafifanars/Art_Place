<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Favourite;
use App\Models\CategoryStories;
use App\Models\CategoryMuseums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;

class AccountController extends Controller
{
    public function index()
    {
        return view('account');
    }

    public function update(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required',
            'email' => 'required|email',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            if($request->oldImage){
                Storage::delete($request->oldImage);
            }
            $validatedData['image'] = $request->file('image')->store('img');
        }

        User::where('id',$request->user_id)
        ->update($validatedData);

        return redirect('/account')->with('success','Akun berhasil diedit');
    }

    public function favplace(Request $request, $id)
    {
        if(User::find($request->user_id)->favourites()->where('fav_id',1)->where('place_id', $id)->count() > 0)
        {
            return redirect('/place/'.$id);
        }

        Favourite::create([
            'user_id' => $request->user_id,
            'fav_id' => 1,
            'place_id' => $id
        ]);

        return redirect('/place/'.$id);
    }

    public function delfavplace(Request $request, $id)
    {
        User::findOrFail($request->user_id)->favourites()->where('fav_id',1)->where('place_id', $id)->delete();

        return redirect('/place/'.$id);
    }

    public function favmuseum(Request $request, $id, $idplace)
    {
        if(User::find($request->user_id)->favourites()->where('fav_id',2)->where('museum_id', $id)->count() > 0)
        {
            return redirect('/museum/'.$id.'/'.$idplace);
        }

        Favourite::create([
            'user_id' => $request->user_id,
            'fav_id' => 2,
            'museum_id' => $id
        ]);

        return redirect('/museum/'.$id.'/'.$idplace);
    }

    public function delfavmuseum(Request $request, $id, $idplace)
    {
        User::findOrFail($request->user_id)->favourites()->where('fav_id',2)->where('museum_id', $id)->delete();

        return redirect('/museum/'.$id.'/'.$idplace);
    }

    public function favstory(Request $request, $id, $idplace)
    {
        if(User::find($request->user_id)->favourites()->where('fav_id',3)->where('story_id', $id)->count() > 0)
        {
            return redirect('/story/'.$id.'/'.$idplace);
        }

        Favourite::create([
            'user_id' => $request->user_id,
            'fav_id' => 3,
            'story_id' => $id
        ]);

        return redirect('/story/'.$id.'/'.$idplace);
    }

    public function delfavstory(Request $request, $id, $idplace)
    {
        User::findOrFail($request->user_id)->favourites()->where('fav_id',3)->where('story_id', $id)->delete();

        return redirect('/story/'.$id.'/'.$idplace);
    }

    public function showfav()
    {
        $user_id = auth()->user()->id;

        $places = User::find($user_id)->favourites()->where('fav_id', 1)->get();
        $museums = User::find($user_id)->favourites()->where('fav_id', 2)->get();
        $stories = User::find($user_id)->favourites()->where('fav_id', 3)->get();

        return view('favourites', compact('places', 'museums', 'stories'));
    }


}
