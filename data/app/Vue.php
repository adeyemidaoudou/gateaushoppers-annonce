<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use PhpParser\Node\Expr\Array_;

class Vue extends Model
{
    //

    public function vueable(){
        return $this->morphTo(__FUNCTION__, 'vuable_type', 'vueable_id');
    }


}
