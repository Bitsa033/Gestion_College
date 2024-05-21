<?php

use App\Http\Controllers\EtudiantController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
// Route::get('register', [RegisterController::class, 'index'])->name('register');
Route::get('/home', [HomeController::class, 'index'])->name('home');
Route::get('classe', [HomeController::class,'classe'])->name('classe');
Route::get('classes', [HomeController::class,'classes'])->name('liste_classes');
Route::get('matiere', [HomeController::class,'matiere'])->name('matiere');
Route::get('matieres', [HomeController::class,'matieres'])->name('liste_matieres');
Route::get('etudiant', [HomeController::class,'etudiant'])->name('etudiant');
Route::get('etudiants', [HomeController::class,'etudiants'])->name('liste_etudiants');
Route::get('inscription', [HomeController::class,'inscription'])->name('inscription');
// Route::post('note_session', function(Request $request){
//     $request->session()->put('classe',$request->input('classe'));
//     dd($request->session()->get('classe'));
// });
Route::post('note_session', [NoteController::class,'note_session'])->name('note_session');
Route::get('note', [HomeController::class,'note'])->name('note');
Route::get('notes', [HomeController::class,'notes'])->name('notes');
Route::post('store_note', [NoteController::class,'store'])->name('store_note');
Route::get('create_note', [HomeController::class,'create_note'])->name('create_note');
Route::get('appreciations', [HomeController::class,'appreciations'])->name('appreciations');
Route::get('coefficients', [HomeController::class,'coefficients'])->name('coefficients');
