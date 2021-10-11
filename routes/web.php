<?php

use App\Http\Controllers\LanguageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\NetworkController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\BackgroundController;
use App\Models\Background;
use App\Models\Language;
use App\Models\Network;
use App\Models\Profile;
use App\Models\Skill;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', function () {
    $profile = Profile::first();
    $network = Network::all();
    $language = Language::all();
    $background = Background::first();
    $skills = Skill::all();
    return view('site.partials.home', compact("skills" ,"background" ,"language", "profile", "network"));
});

Route::get('/back', function () {
    $profile = Profile::first();
    return view("backoffice.partials.back", compact("profile"));
});

Route::resource('/back/profile', ProfileController::class);
Route::resource('/back/network', NetworkController::class);
Route::resource('/back/skills', SkillsController::class);
Route::resource('/back/language', LanguageController::class);
Route::resource('/back/project', ProjectController::class);
Route::resource('/back/background', BackgroundController::class);

