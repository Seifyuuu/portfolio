<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\SkillsController;
use App\Models\Network;
use App\Models\Profile;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    $profile = Profile::first();
    $network = Network::all();
    return view('site.partials.home', compact("profile", "network"));
});

Route::get('/back', function () {
    $profile = Profile::first();
    return view("backoffice.partials.back", compact("profile"));
});

Route::resource('/back/profile', ProfileController::class);
Route::resource('/back/network', NetworkController::class);
Route::resource('/back/skills', SkillsController::class);