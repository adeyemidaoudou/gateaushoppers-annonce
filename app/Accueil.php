<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Accueil extends Model
{
    //

    public function views(){
        return $this->morphMany('App\Vue', 'vueable');
    }
}
