<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';

    //ONE order has many orderDetails.
    public function orderDetail() {
    	return $this->hasMany('orderDetail');
    }
    
    //one user has many orders.
    public function user() {
    	return $this->belongsTo('user');
    }
}
