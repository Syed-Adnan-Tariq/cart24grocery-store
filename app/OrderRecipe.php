<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderRecipe extends Model
{
    protected $fillable=[
        'recipe_id',
        'order_id',

    ];

    public function recipes()
    {

        return $this->belongsTo('App\Recipe');

    }

    public function orders()
    {

        return $this->belongsTo('App\Order');

    }

}
