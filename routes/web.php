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

Route::get('/', [PlaceController::class, 'index'])->middleware('auth');

Route::get('/place', [PlaceController::class, 'index']);

Route::get('/place/{id}' , [PlaceController::class, 'show']);

// Route::get('/place', [PlaceController::class, 'show']);

Route::get('/museum', [MuseumController::class, 'show']);
Route::get('/museum-create', [MuseumController::class, 'create'])->name('museum.create');
Route::post('/museum-store', [MuseumController::class, 'store'])->name('museum.store');

Route::get('/art', [ArtController::class, 'show']);

Route::get('/artist', [ArtistController::class, 'show']);

Route::get('/story', [StoryController::class, 'show']);

// Login
Route::get('/login', [LoginController::class, 'index'])->name('login')->middleware('guest');
Route::post('/login', [LoginController::class, 'authenticate']);
// Logout
Route::post('/logout', [LoginController::class, 'logout']);

// Register
Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);
