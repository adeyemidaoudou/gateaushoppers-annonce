<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    //

    public function views(){
        return $this->morphMany('App\Vue', 'vueable');
    }
}
