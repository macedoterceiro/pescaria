<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contato extends Model
{
    function user(){
        return $this->belongsTo('App\User');
    }
    function telefones(){
        return $this->hasMany('App\Telefone');
    }
}
