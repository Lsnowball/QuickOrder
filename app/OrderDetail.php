<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    protected $table = 'orderDetail';

    //ONE order has many orderDetails.
    public function order() {
    	return $this->belongsTo('order', 'order_id');
    }

    //one orderdetail has one menu.
    public function menu() {
    	return $this->hasOne('menu');
    }

    
}
