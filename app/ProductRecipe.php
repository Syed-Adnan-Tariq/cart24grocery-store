<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductRecipe extends Model
{
    protected $fillable=[
        'product_id',
        'recipe_id',
    ];

    public function products()
    {

        return $this->belongsTo('App\Product');

    }
    public function recipes()
    {

        return $this->belongsTo('App\Recipe');

    }


}
