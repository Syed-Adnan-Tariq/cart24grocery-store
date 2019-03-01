<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
class Role extends Model
{
    protected $fillable = [
        'name', 'description',
    ];

    public function users(){

        return $this->hasOne('App\User');

    }
}

