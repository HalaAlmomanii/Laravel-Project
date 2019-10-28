<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Language extends Model
{
    public function  guide ()
    {
         $this->belongsToMany('App\Guide');
    }
}
