<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museum;
use App\Models\Place;
use App\Models\CategoryMuseums;

class MuseumControllerSec extends Controller
{

    public function detail($id, $idplace)
    {
        CategoryMuseums::where('museum_id', $id)->where('place_id', $idplace)->firstOrFail(); //cek apakah museum dan place sudah sesuai
        $museum = Museum::findOrFail($id); //cari detail musuem
        $places = CategoryMuseums::where('museum_id', $id)->get(); //place yang ada pada item tersebut
        $count = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->count(); //jumlah museum pada place yang sama
        $museums = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->offset(rand(0, $count-6))->limit(6)->get(); //musuem lain pada place yang sama
        $allplace = Place::all(); //daftar semua place
        $placeid = $idplace;

        return view('showmuseum', compact('museum', 'places', 'count', 'museums', 'allplace', 'placeid'));
    }
    
    public function create($id)
    {
        
        $addmuseum = Museum::where('id', $id)->first();

        return view('addmuseum', [
            'category_museum' => CategoryMuseums::all(),
            'place_id' => $id
        ]);
    }

    public function add(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'desc' => 'required|string',
            'image' => 'image|file|max:1024'
        ]);

        if($request->file('image')){
            $validatedData['image'] = $request->file('image')->store('img');
        }

        Museum::create($validatedData);

        $idMuseum = Museum::orderBy('id', 'DESC')->first();

        CategoryMuseums::create([
            'museum_id' => $idMuseum->id,
            'place_id' => $request->place_id
        ]);

        return redirect('/place/'. $request->place_id)->with('success','Museum berhasil ditambah');

    }

    public function edit(Request $request, $id, $idplace)
    {
        $editmuseum = Museum::where('id', $id)->first();

        return view('editmuseum', [
            'editmuseum' => $editmuseum,
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

        Museum::where('id', $request->museum_id)
            ->update($validatedData);

        return redirect('/museum/'. $request->museum_id .'/'. $request->place_id)->with('success','Museum berhasil diedit');
    }

    public function destroy(Request $request)
    {
        $idPlace = $request->place_id;
        $place = Place::findOrFail($idPlace);
        Museum::destroy($request->museum_id);
        CategoryMuseums::destroy($request->museum_id);

        return redirect('/place/'. $idPlace)->with('success', 'Museum berhasil dihapus!');
    }
}
