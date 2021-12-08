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
use App\Http\Controllers\StoryControllerSec;
use App\Http\Controllers\MuseumControllerSec;

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
// Route::get('place/{id}', [PlaceControllerSec::class, 'detail']);
Route::post('/place/sortbytime', [PlaceController::class, 'sortTime']);
Route::post('/place/sortbyalpha', [PlaceController::class, 'sortAlpha']);
Route::get('/search', [PlaceController::class, 'search']);


// Museum
Route::get('/museum/{id}/{idmuseum}', [MuseumController::class, 'detail']);
Route::resource('/museum', MuseumController::class)->middleware('auth');;
Route::get('/museum/edit/{idmuseum}/{idplace}', [MuseumControllerSec::class, 'edit']);
Route::post('/museum/edit', [MuseumControllerSec::class, 'update']);
Route::post('/museum/delete', [MuseumControllerSec::class, 'destroy']);


// Story
Route::get('/story/{id}/{idstory}', [StoryControllerSec::class, 'detail']);
Route::resource('/story', StoryController::class)->middleware('auth');
Route::post('/story/edit', [StoryControllerSec::class, 'update']);
Route::post('/story/delete', [StoryControllerSec::class, 'destroy']);


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
