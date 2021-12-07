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
Route::post('/place/sortbytime', [PlaceController::class, 'sortTime']);
Route::post('/place/sortbyalpha', [PlaceController::class, 'sortAlpha']);


// Museum
Route::get('/museum/{id}/{idmuseum}', [MuseumController::class, 'detail']);
Route::resource('/museum', MuseumController::class)->middleware('auth');
// Route::get('/museum/create/{id}', [MuseumController::class, 'add'])->middleware('auth');


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
