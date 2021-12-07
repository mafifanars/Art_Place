<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use App\Models\Place;
use App\Models\CategoryMuseums;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($id)
    {
        $museums = Place::findOrFail($id)->category_museums()->get();

        return view('museums', compact('museums'));
    }

    public function detail($id, $idplace)
    {
        CategoryMuseums::where('museum_id', $id)->where('place_id', $idplace)->firstOrFail(); //cek apakah museum dan place sudah sesuai
        $museum = Museum::findOrFail($id); //cari detail musuem
        $places = CategoryMuseums::where('museum_id', $id)->get(); //medium yang ada pada item tersebut
        $count = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->count(); //jumlah museum pada place yang sama
        $museums = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->offset(rand(0, $count-6))->limit(6)->get(); //musuem lain pada place yang sama
        $allplace = Place::all(); //daftar semua place
        
        // if(Auth::check())
        // {
        //     $liked = User::find(Auth::user()->id)->favourites()->where('fav_id',2)->where('item_id', $id)->count();
        // }
        // else
        // {
        //     $liked = -1;
        // }

        return view('showmuseum', compact('museum', 'places', 'count', 'museums', 'allplace'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $imageName=time().'.'.$request->image->extension();
        $request->File('image')->storeAs('/public', $imageName);
        Museum::create([
            'art_id' => $request->artId,
            'name' => $request->name,
            'desc' => $request->desc,
            'image' => $imageName,
        ]);

        return redirect('museum-create');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // return view('showmuseum');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function edit(Museum $museum)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Museum $museum)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Museum  $museum
     * @return \Illuminate\Http\Response
     */
    public function destroy(Museum $museum)
    {
        //
    }
}
