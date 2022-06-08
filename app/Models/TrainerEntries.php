<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TrainerEntries extends Model
{
    
    use HasFactory;

    protected $fillable = ['trainer_id', 'pokemon_id', 'seen', 'caught'];

    public function post(){
        return $this->hasOne('App/Trainer');
    }

}
