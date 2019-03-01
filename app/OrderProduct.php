<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderProduct extends Model
{
    protected $fillable=[
        'product_id',
        'order_id'
    ];

    public function products()
    {

        return $this->belongsTo('App\Product');

    }  public function orders()
    {

        return $this->belongsTo('App\Order');

    }
}


