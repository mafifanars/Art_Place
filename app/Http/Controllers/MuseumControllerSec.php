<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Museum;
use App\Models\Place;
use App\Models\CategoryMuseums;

class MuseumControllerSec extends Controller
{
    public function edit(Request $request, $id, $idplace)
    {
        // dd($id, $idplace);
        $editmuseum = Museum::where('id', $id)->first();
        // dd($editmuseum);
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

        // dd($request->place_id);


        Museum::where('id', $request->museum_id)
            ->update($validatedData);

        return redirect('/museum/'. $request->museum_id .'/'. $request->place_id)->with('success','Museum berhasil diedit');
    }

    public function destroy(Request $request)
    {
        $idPlace = $request->place_id;
        // dd($idPlace);
        $place = Place::findOrFail($idPlace);
        Museum::destroy($request->museum_id);
        CategoryMuseums::destroy($request->museum_id);

        return redirect('/place/'. $idPlace)->with('success', 'Museum berhasil dihapus!');
    }
}
