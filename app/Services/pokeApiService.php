<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\ServiceProvider;

class pokeApiService extends ServiceProvider
{

    public const URL = 'https://pokeapi.co/api/v2/';
    public const ENDPOINT_POKEMON = 'pokemon';
    public const ENDPOINT_LOCATIONS = 'locations';
    public const ENDPOINT_MOVES = 'moves';

    public static function getPokemons($offset = 0, $limit = 10)
    {
        return Http::get(self::URL . self::ENDPOINT_POKEMON, compact('limit', 'offset'))->json();
    }

}
