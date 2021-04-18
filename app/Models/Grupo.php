<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Grupo extends Model
{
    use HasFactory;

    //Relacion MUCHOS A MUCHOS
    public function users(){
        return $this->belongsToMany('App\Models\User');
    }
}
