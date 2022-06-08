<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TrainerEntries;
use App\Models\TrainerPokemon;
use App\Models\Trainer;

class TrainerController extends Controller
{

    function viewTrainerList(){
        return view('trainer/trainerList', ['trainers' => Trainer::get(), 'search' => ""]);
    }

    function viewTrainerListSearch($search){
        return view('trainer/trainerList', ['trainers' => DB::select('select * from trainers where name like "%'.$search.'%"'), 'search' => $search]);
    }

    function viewTrainerCreate(){
        return view('trainer/trainerCreate');
    }

    function actTrainerCreate(Request $request){
        Trainer::create([
            'name' => $request->formName,
            'balance' => $request->formBalance
        ]);
        echo "<script>alert('$request->formName registered!')</script>";
        echo "<script>document.location = '/trainer'</script>";
    }

}
