<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $guarded = [];


    public function users(){

        return $this->belongsTo('App\User');

    }

    public function feedback()
    {

        return $this->hasMany('App\Feedback');
    }

}
