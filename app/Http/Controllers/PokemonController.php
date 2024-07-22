<?php

namespace App\Http\Controllers;

use App\Services\pokeApiService;
use Faker\Factory;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function index()
    {
        try {
            $faker = Factory::create();
            $offset = $faker->numberBetween($min = 0, $max = 100);
            $pokemonArray = pokeApiService::getPokemons($offset);
        } catch (\Exception $exception) {
            return response()->json(['error' => $exception->getMessage()], 500);
        } finally {
            return view('pokemon')->with([
                'pokemons' => $pokemonArray ?? []
            ]);
        }
    }

    public function show()
    {
    }
}
