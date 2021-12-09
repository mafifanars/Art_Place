<?php

namespace App\Http\Controllers;

use App\Models\Museum;
use App\Models\Place;
use App\Models\CategoryMuseums;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class MuseumController extends Controller
{
    // /**
    //  * Display a listing of the resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function index($id)
    // {
    //     $museums = Place::findOrFail($id)->category_museums()->get();

    //     return view('museums', compact('museums'));
    // }

    // public function detail($id, $idplace)
    // {
    //     CategoryMuseums::where('museum_id', $id)->where('place_id', $idplace)->firstOrFail(); //cek apakah museum dan place sudah sesuai
    //     $museum = Museum::findOrFail($id); //cari detail musuem
    //     $places = CategoryMuseums::where('museum_id', $id)->get(); //place yang ada pada item tersebut
    //     $count = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->count(); //jumlah museum pada place yang sama
    //     $museums = Place::find($idplace)->category_museums()->where('museum_id', '<>', $id)->offset(rand(0, $count-6))->limit(6)->get(); //musuem lain pada place yang sama
    //     $allplace = Place::all(); //daftar semua place
    //     $placeid = $idplace;

    //     return view('showmuseum', compact('museum', 'places', 'count', 'museums', 'allplace', 'placeid'));
    // }

    // /**
    //  * Show the form for creating a new resource.
    //  *
    //  * @return \Illuminate\Http\Response
    //  */
    // public function create(Request $request, $id, $idplace)
    // {
    //     // dd($idplace->id);
    //     // return view('addmuseum', [
    //     //     'category_museums' => CategoryMuseums::all(),
    //     //     'place' => Place::where('id', $idplace->id)
    //     // ]);

    //     dd($idplace);
    //     $addmuseum = Museum::where('id', $id)->first();
    //     return view('addmuseum', [
    //         'addmuseum' => $addmuseum,
    //         'idplace' => $idplace
    //     ]);
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @return \Illuminate\Http\Response
    //  */
    // public function store(Request $request, $placeid)
    // {
    //     dd($placeid);
    //     $validatedData = $request->validate([
    //         'name' => 'required|max:255',
    //         'desc' => 'required|string',
    //         'image' => 'image|file|max:1024'
    //     ]);

    //     if($request->file('image')){
    //         $validatedData['image'] = $request->file('image')->store('img');
    //     }

    //     Museum::create($validatedData);

    //     $idMuseum = Museum::orderBy('id', 'DESC')->first();

    //     CategoryMuseums::create([
    //         'museum_id' => $idMuseum->id,
    //         'place_id' => $request->place_id
    //     ]);

    //     return redirect('/place/'. $request->place_id)->with('success','Museum berhasil ditambah');
    // }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  \App\Models\Museum  $museum
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     // return view('showmuseum');
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  \App\Models\Museum  $museum
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit(Museum $museum)
    // {
    //     return view('editmuseum', [
    //         'museum' => $museum,
    //     ]);
    // }

    // /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  \App\Models\Museum  $museum
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, Museum $museum)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  *
    //  * @param  \App\Models\Museum  $museum
    //  * @return \Illuminate\Http\Response
    //  */
    // public function destroy($id, $idplace)
    // {
    //     Museum::destroy($id);

    //     return redirect('/museum/'.$idplace)->with('success','Museum berhasil dihapus');
    // }

    public function create()
    {
        return 'Belum bisa create museum gan';
    }

    // public function create(Request $request, $idplace)
    // {
    //     $addmuseum = Museum::where('id', $id)->first();
    //     return view('addmuseum', [
    //         'addmuseum' => $addmuseum,
    //         'idplace' => $idplace
    //     ]);
    // }
}