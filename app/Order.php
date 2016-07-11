<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Order extends Model
{
    protected $table = 'orders';
    public $timestamps = false;

    //ONE order has many orderDetails.
    public function orderDetails() {
    	return $this->hasMany('App\OrderDetail');
    }
    
    //one user has many orders.
    public function user() {
    	return $this->belongsTo('App\User');
    }
}
