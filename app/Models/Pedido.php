<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

class Pedido extends Model
{
    use HasFactory;

    //Relacion UNO a MUCHOS (INVERSA)
    public function user(){
        return $this->belongsTo('App\Models\User');
    }
}
