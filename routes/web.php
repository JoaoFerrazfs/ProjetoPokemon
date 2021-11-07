<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;
use App\Http\Controllers\TrainerController;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/busca',[PokemonController::class,'infoPokemon']);

Route::get('/register', function () {
    return view('client.register');
});

Route::get('/login', function () {
    return view('client.login');
});


Route::post('/registrodeTreinador',[TrainerController::class,'store']);
