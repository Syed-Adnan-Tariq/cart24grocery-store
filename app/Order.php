<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable=[
        'Quantity',
        'price',
       // 'date',
        //'time',
        'user_id'
    ];

    public function products(){

        return $this->belongsToMany('App\Product');

    }

    public function recipes(){

        return $this->belongsToMany('App\Recipe');

    }

    public function users(){

        return $this->belongsTo('App\User');

    }

    public function order_product()
    {

        return $this->hasMany('App\OrderProduct');

    }

    public function order_recipe()
    {

        return $this->hasMany('App\OrderRecipe');

    }
}
