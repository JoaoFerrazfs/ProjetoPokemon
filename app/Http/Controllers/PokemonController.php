<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;

use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function infoPokemon(Request $request)
    {
        $pokemonName=$request->pokemonName;

        $response = Http::get('https://pokeapi.co/api/v2/pokemon/'.$pokemonName)->json();

        $infoPokemon = $this->montInfoPokemon($response);   
        
        
        return view('welcome',['infoPokemon'=>$infoPokemon,'pokemonName'=>$pokemonName]);
    }

    public function montInfoPokemon($response)
    {

        $pokemonType = $response['types'][0]['type']['name'];
        $pokemonBaseHP = $response['stats'][0]['base_stat'];
        $pokemonBaseAttack = $response['stats'][1]['base_stat'];
        $pokemonBaseDefense = $response['stats'][2]['base_stat'];
        $pokemonBaseSpecialAttack = $response['stats'][3]['base_stat'];
        $pokemonBaseSpecialDefense = $response['stats'][4]['base_stat'];
        $pokemonBaseSpeed = $response['stats'][5]['base_stat'];
        $pokemonTotalBase = $pokemonBaseAttack +
            $pokemonBaseDefense +
            $pokemonBaseSpecialAttack +
            $pokemonBaseSpecialDefense +
            $pokemonBaseSpeed;
        $pokemonSprite = $response['sprites']['front_default'];
        $pokemonAbilities = [];
        foreach ($response['abilities'] as  $value) {
         
            $pokemonAbilities[] = $value['ability']['name'];
        }


        return  $reponseMont = [
            $pokemonType,
            $pokemonBaseHP,
            $pokemonBaseAttack,
            $pokemonBaseDefense,
            $pokemonBaseSpecialAttack,
            $pokemonBaseSpecialDefense,
            $pokemonBaseSpeed,
            $pokemonTotalBase,
            $pokemonSprite,
            $pokemonAbilities
        ];
        
    }
}
