<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];    /*Use for fillable name in this automatically solve problem*/
    protected $fillable=[
        'name',
        'imagePath',
    ];

    public function products(){

return $this->hasMany('App\Product');

    }
}
