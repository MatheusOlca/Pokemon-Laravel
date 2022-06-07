<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrainerEntries;
use App\Models\TrainerPokemon;

class TrainerController extends Controller
{

    function viewProfile(){
        return view('trainer/profile');
    }

    function viewReadAllSeen(){
        return view('trainer/pokedex', ['pokemons' => TrainerEntries::get()]);
    }

    function viewReadAllCaught(){
        return view('trainer/caught', ['pokemons' => TrainerPokemon::get()]);
    }

    function viewCreate(){
        return view('trainer/create');
    }

    function viewEdit($id){
        return view('trainer/edit', ['id' => $id]);
    }

    function viewDelete($id){
        return view('trainer/delete', ['id' => $id]);
    }

}
