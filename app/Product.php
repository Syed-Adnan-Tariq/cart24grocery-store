<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
 protected $fillable=[
     'title',
     //'description',
     'imagePath',
     'price',
     'discount',
     'category_id',

 ];

    public function categories()
    {

        return $this->belongsTo('App\Category');

    }

    public function recipes()
    {

        return $this->belongsToMany('App\Recipe');

    }

    public function orders()
    {

        return $this->belongsToMany('App\Order');

    }

      public function order_product()
    {

        return $this->hasMany('App\OrderProduct');

    }

    public function product_recipe()
    {

        return $this->hasMany('App\ProductRecipe');

    }


}
