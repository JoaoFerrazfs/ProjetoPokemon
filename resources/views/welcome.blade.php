@extends('layouts.padrao')
@section('content')

    <div class="infoPokemon">
        <div class="searchPokemon">
            <fieldset>
                <legend>Pesquise sobre seu pokemon favorito </legend>
                <form action="/busca" method="POST">
                    @csrf
                    <div class="input-group mb-3 ">
                        <span class="input-group-text">Nome do monstrinho</span>
                        <input type="text" name="pokemonName" class="form-control" placeholder="Digite aqui">
                    </div>
                    <div class="input-group mb-3 ">
                        <button type="submit" class="btn btn-outline-dark">Pesquisar</button>
                    </div>
                </form>
            </fieldset>
        </div>
    </div>

    <div>
        @isset($infoPokemon)
            <div class="card" style="width: 18rem;">
                <img src="{{ $infoPokemon[8] }}" class="card-img-top" alt="Pokemon{{ $pokemonName }}">
                <div class="card-body">
                    <h5 class="card-title">{{ $pokemonName }}</h5>
                    <p>Tipo: {{ $infoPokemon[0] }}</p>
                    <p>HP: {{ $infoPokemon[1] }}</p>
                    <p>Ataque: {{ $infoPokemon[2] }}</p>
                    <p>Defesa: {{ $infoPokemon[3] }}</p>
                    <p>Ataque Especial : {{ $infoPokemon[4] }}</p>
                    <p>Defesa Especial: {{ $infoPokemon[5] }}</p>
                    <p>Velocidade: {{ $infoPokemon[6] }}</p>
                    <p>Base Total: {{ $infoPokemon[7] }}</p>
                    
              
                    @foreach ($infoPokemon[9] as $pokemon)                    
                      <p>Habilidade: {{$pokemon}}</p>

                    @endforeach

                </div>
            </div>








        @endisset
    </div>



@endsection
