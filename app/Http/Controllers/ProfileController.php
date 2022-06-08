<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TrainerEntries;
use App\Models\TrainerPokemon;
use App\Models\Trainer;

class ProfileController extends Controller
{
    
    function viewProfile($id){
        return view('profile/profile', ['trainer' => Trainer::find($id), 'id' => $id]);
    }

    function viewReadAllSeen($id){
        return view('profile/pokedex', ['pokemons' => DB::select("select * from trainer_entries where trainer_id = $id"), 'id' => $id]);
    }

    function viewReadAllCaught($id){
        return view('profile/caught', ['pokemons' => DB::select("select * from trainer_pokemon where trainer_id = $id"), 'id' => $id]);
    }

    function viewCreate(){
        return view('profile/create');
    }

    function viewEdit($id){
        return view('profile/edit', ['id' => $id]);
    }

    function viewDelete($id){
        return view('profile/delete', ['id' => $id]);
    }

}
