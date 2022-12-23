<?php

use App\Http\Controllers\ElementModuleController;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\FiliereController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\MoyenneController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\ProfileController;
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

        Route::get('Releves de notes/{Classe}',[XmlController::class,'XMLReleves']);

    });
    Route::get('Releve de note/{id}',[XmlController::class,'XMLReleve']);
});

require __DIR__.'/auth.php';


