<?php

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PokemonController;



Route::get('/', function () {
    return view('welcome');
});

Route::post('/busca',[PokemonController::class,'infoPokemon']);


