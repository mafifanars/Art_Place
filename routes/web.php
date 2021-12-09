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
use App\Http\Controllers\PlaceControllerSec;
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
Route::get('/place', [PlaceControllerSec::class, 'index']);
Route::get('/place/create', [PlaceControllerSec::class, 'create'])->middleware('admin');
Route::post('/place/create', [PlaceControllerSec::class, 'add'])->middleware('admin');
Route::get('/place/{id}/edit', [PlaceControllerSec::class, 'edit'])->middleware('admin');
Route::post('/place/edit', [PlaceControllerSec::class, 'update'])->middleware('admin');
Route::get('place/{id}', [PlaceControllerSec::class, 'detail']);
Route::post('/place/delete', [PlaceControllerSec::class, 'destroy'])->middleware('admin');
Route::post('/place/sortbytime', [PlaceControllerSec::class, 'sortTime']);
Route::post('/place/sortbyalpha', [PlaceControllerSec::class, 'sortAlpha']);
Route::get('/search', [PlaceControllerSec::class, 'search']);


// Museum
Route::get('/museum/{id}/{idmuseum}', [MuseumControllerSec::class, 'detail']);
Route::get('/place/{id}/museum/create', [MuseumControllerSec::class, 'create'])->middleware('admin');
Route::post('/place/museum/create', [MuseumControllerSec::class, 'add'])->middleware('admin');
Route::get('/museum/edit/{idmuseum}/{idplace}', [MuseumControllerSec::class, 'edit'])->middleware('admin');
Route::post('/museum/edit', [MuseumControllerSec::class, 'update'])->middleware('admin');
Route::post('/museum/delete', [MuseumControllerSec::class, 'destroy'])->middleware('admin');


// Story
Route::get('/story/{idplace}/{idstory}', [StoryControllerSec::class, 'detail']);
Route::get('/place/{id}/story/create', [StoryControllerSec::class, 'create'])->middleware('admin');
Route::post('/place/story/create', [StoryControllerSec::class, 'add'])->middleware('admin');
Route::get('/story/edit/{idstory}/{idplace}', [StoryControllerSec::class, 'edit'])->middleware('admin');
Route::post('/story/edit', [StoryControllerSec::class, 'update'])->middleware('admin');
Route::post('/story/delete', [StoryControllerSec::class, 'destroy'])->middleware('admin');


// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);

// Logout
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
