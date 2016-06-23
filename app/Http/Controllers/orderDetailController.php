<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class orderDetailController extends Controller
{
    // public function edit($id)
	public function edit(OrderDetail $orderDetail) {
		 return view('OrderDetail.show', compact('orderDetail'));
	}

	
}
