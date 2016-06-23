<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use DB;

class menusController extends Controller
{
	

    //fetch data from database.
	public function fetchPrice( $menu ) {
		$name = $menu;
  		$price = DB::table('menus')->where('name', $name)->value('price');
  		
  		return response()->json(['name'=> $name, 'price'=> $price]);
  		
	}


}
