<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    public function guide(){
        $this->hasMany('App\Guide');
    }
}
