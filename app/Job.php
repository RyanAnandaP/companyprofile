<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    //

    public function qualifications(){
        return $this->hasMany('App\Qualification');
    }
    public function descriptions(){
        return $this->hasMany('App\Description');
    }
}
