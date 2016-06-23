<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    // 3 attributes are able to be filled.
    protected $fillable = array('name', 'price', 'ingredients');

    //one orderDetail has one menu.
    public function orderDetail() {
    	return $this->belongsTo('orderDetail', 'menu_id');
    }

    
}
