<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Recipe extends Model
{
    protected $fillable=[
        'title',
        'imagePath',
        'videoPath',
        'discount',
        'quantity',
        'ingredients',
        'cooking_method',
        'serve',
        'cooking_time',
        'price',
    ];

    public function orders()
    {

        return $this->belongsToMany('App\Order');

    }

    public function products()
    {

        return $this->belongsToMany('App\Product');

    }

    public function product_recipe()
    {

        return $this->hasMany('App\ProductRecipe');

    }
    public function order_recipe()
    {

        return $this->hasMany('App\OrderRecipe');

    }
}
