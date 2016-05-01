<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Incomplete_task extends Model
{
    //
    public function user(){
        return $this->belongsTo('\App\User');
    }
}
