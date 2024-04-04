<?php

use App\Http\Controllers\AppreciationController;
use App\Http\Controllers\ClasseController;
use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\InscriptionController;
use App\Http\Controllers\MatiereController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
use Database\Factories\EtudiantFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// utilisateurs
Route::get('users',[UserController::class,'index']);
Route::post('store_user', [UserController::class,'store']);
Route::post('login_user', [UserController::class,'login']);
Route::get('show_user/{id}', [UserController::class,'show']);
Route::put('update_user/{id}', [UserController::class,'update']);
Route::get('logout_user', [UserController::class,'logout'])->middleware('auth:sanctum');
// classes
Route::get('classes',[ClasseController::class,'index']);
Route::get('store_classe',[ClasseController::class,'store']);
Route::get('show_classe',[EtudiantFactory::class,'show']);
Route::put('update_classe/{id}', [UserController::class,'update']);
// matieres
Route::get('matieres', [MatiereController::class,'index']);
Route::post('store_matiere', [MatiereController::class,'store']);
Route::get('show_matiere/{id}', [MatiereController::class,'show']);
Route::put('update_matiere/{id}', [UserController::class,'update']);
// etudiants
Route::get('etudiants', [EtudiantController::class,'index']);
Route::post('store_etudiant', [EtudiantController::class,'store']);
Route::get('show_etudiant/{id}', [EtudiantController::class,'show']);
Route::put('update_etudiant/{id}', [EtudiantController::class,'update']);
// appreciations
Route::get('appreciations', [AppreciationController::class,'index']);
Route::post('store_appreciaiton', [AppreciationController::class,'store']);
Route::get('show_appreciation/{id}', [AppreciationController::class,'show']);
Route::put('update_appreciation/{id}', [AppreciationController::class,'update']);
// inscription
Route::get('inscriptions', [InscriptionController::class,'index']);
Route::post('store_inscription', [InscriptionController::class,'store']);
Route::get('show_inscription/{id}', [InscriptionController::class,'show']);
Route::put('update_inscription/{id}', [InscriptionController::class,'update']);
// notes
Route::get('notes', [NoteController::class,'index']);
Route::post('store_note', [NoteController::class,'store']);
Route::get('show_note/{id}', [NoteController::class,'show']);
Route::put('update_note/{id}', [NoteController::class,'update']);
