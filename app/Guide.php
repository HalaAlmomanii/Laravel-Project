<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
   public function place()
   {
        $this->belongsTo('App\Place');
    }

    public function  language ()
    {
         $this->morphToMany('App\Guide_language');
    }

     public function  user ()
    {
         $this->morphToMany('App\Guide_User');
    }



}
