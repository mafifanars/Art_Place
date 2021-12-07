<?php

use App\Models\Place;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArtController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PlaceController;
use App\Http\Controllers\StoryController;
use App\Http\Controllers\ArtistController;
use App\Http\Controllers\MuseumController;
use App\Http\Controllers\RegisterController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Place
Route::get('/', [PlaceController::class, 'index'])->middleware('auth');
Route::resource('/place', PlaceController::class)->middleware('auth');
// Route::get('/place', [PlaceController::class, 'index'])->middleware('auth');
// Route::get('/place/{id}' , [PlaceController::class, 'show']);
// Route::get('/place/tambah' , [PlaceController::class, 'create'])->middleware('auth');
// // Route::post('/place/create', function(){
//     return view('addplace');
// });


// Museum
Route::get('/museum/{id}/{idmuseum}', [MuseumController::class, 'detail']);


// Story
Route::get('/story/{id}/{idstory}', [StoryController::class, 'detail']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
