<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{


    public function guide()
    {
        return $this->belongsTo('App\Guide');
    }

 public function user()
    {
        return $this->belongsTo('App\User');
    }


}
