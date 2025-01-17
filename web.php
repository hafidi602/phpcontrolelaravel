<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controllerlogin;
use App\Http\Controllers\controllerAuth;
use App\Http\Controllers\controllercreate;
use App\Http\Controllers\controllerInterface;
use App\Http\Controllers\controllerStore;
// pour la formulaire de creation du compte
Route::get('/create',[controllercreate::class,'create'])->name('create');
// pour les categories
Route::get('/historique',[controllerInterface::class,'historique'])->name('historique');
Route::get('/horreur',[controllerInterface::class,'horreur'])->name('horreur');
Route::get('/action',[controllerInterface::class,'action'])->name('action');
Route::get('/romantique',[controllerInterface::class,'romantique'])->name('romantique');
// pour connecter
Route::get('/login',[controllerlogin::class,'login'])->name('login');
Route::post('/auth',[controllerAuth::class,'auth'])->name('auth');
// pour afficher l'interface
Route::get('/interface',[controllerInterface::class,'interface'])->name('interface');
Route::post('/store',[controllerStore::class,'store'])->name('store');
// pour detail de films
Route::get('/detail/{id}',[controllerInterface::class,'detail'])->name('film.detail');
// for watching
Route::get('/watch/{id}',[controllerInterface::class,'watch'])->name('watch');
// pour la barre de recherche
Route::post('/recherche',[controllerInterface::class,'recherche'])->name("recherche");