<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    //
    public function job(){
        return $this->belongsTo('App\Job');
    }
}
