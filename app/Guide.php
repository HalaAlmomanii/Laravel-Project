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
         $this->belongsToMany('App\Guide');
    }

     public function  user ()
    {
         $this->belongsToMany('App\User');
    }



}
