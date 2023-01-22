<?php

use App\Http\Controllers\ElementModuleController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\MoyenneController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SeanceController;
use App\Http\Controllers\XmlController;
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


Route::middleware('auth')->group(function () {
    Route::get('/dashboard', [HomeController::class,'index'])->middleware( ['verified'])->name('dashboard');
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::middleware(['admin'])->group(function(){

        Route::resource('Eleve',EleveController::class);

        Route::resource('Filiere',FiliereController::class);

        Route::resource('Module',ModuleController::class);

        Route::resource('Elementmodule',ElementmoduleController::class);

        Route::resource('Note',NoteController::class);

        Route::resource('Moyenne',MoyenneController::class);

        Route::resource('Prof',ProfController::class);

        Route::resource('Seance',SeanceController::class);

        Route::get('Emplois du temps/dashboard', function () {
            return view('Emplois du temps.dashboard');
        });

        Route::get('Releves de notes/{Classe}',[XmlController::class,'XMLReleves']);

        Route::get('Cartes des etudiants/{Classe}',[XmlController::class,'XMLCartes']);

        Route::get('Emplois du temps/{Classe}',[XmlController::class,'XMLEmplois']);

    });
    Route::get('Releve de note/{id}',[EleveController::class,'releve']);
    Route::get('Carte etudiant/{id}',[EleveController::class,'carte']);
    Route::get('Emploi du temps/{id}',[EleveController::class,'emploi']);

    Route::post('store-image/{id}',[EleveController::class,'storeImage']);
});

require __DIR__.'/auth.php';
//Test XML
Route::get('/xmltest',[\App\Http\Controllers\XmlController::class,'index']);
Route::get('/xmltestdisplay',[\App\Http\Controllers\XmlController::class,'display']);

