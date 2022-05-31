<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerPokemon extends Model
{
    use HasFactory;

    protected $fillable = ['trainer', 'pokemon'];

}
