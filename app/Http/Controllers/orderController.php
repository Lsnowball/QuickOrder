<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\OrderDetail;
use App\Http\Requests;
use App\Order;
use DateTime;

use App\Http\Requests\OrderListFormRequest;
use DB;
class orderController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$userId = \Auth::user()->id;
		$orders = DB::table('orders')->where('user_id', $userId)->orderBy('id', 'desc')->simplePaginate(15);

		return view('orders.index', ['orders' => $orders]);
	}

	// //fetch data from database.
	// public function fetch() {
	// 	$userId = \Auth::user()->id;

 //  		$orders = Order::where('user_id', $userId)->orderBy('created_at', 'desc')->get();

 //  		// Return as json
 //  		return Response::json($orders);
	// }

	public function saveOrder( Request $request ) {
		$input = $request->input('menu');
		// print implode($input);

		//generate order id
		$order = new Order;
		$total_price = 0.0;
		//save order(order_id, user_id, total_price).
		$order->user_id = \Auth::user()->id;
		$order->created_at = new DateTime;
		$order->save();
	
		 foreach($input as $menu) {
			//generate orderDetail id & save orderDetail (order_id, menu_id, quantity).
			$detail = new OrderDetail;
			$detail->order_id = $order->id;  //use new generated order id.
			$detail->menu_id = DB::table('menus')->where('name', $menu)->value('id');
			$detail->quantity = 1;
			$order->orderDetails()->save($detail);
			$price = DB::table('menus')->where('name', $menu)->value('price');
			$total_price += $price * 1;

		};
		$order->total_price = $total_price;
		$order->save();

		$orders = Order::all();
		return redirect()->route('orderHistory');
		
	}
 
	// /**
	//  * Show the form for creating a new resource.
	//  *
	//  * @return Response
	//  */
	// public function create()
	// {
	// 	return view('.create');
	// }
 
	// /**
	//  * Store a newly created resource in storage.
	//  *
	//  * @return Response
	//  */
	// public function store()
	// {
	// 	//
	// }
 
	// /**
	//  * Display the specified resource.
	//  *
	//  * @param  \App\Project $project
	//  * @return Response
	//  */
	// public function show(Order $order)
	// {
	// 	return view('orders.show', compact('order'));
	// }
 
	// *
	//  * Show the form for editing the specified resource.
	//  *
	//  * @param  \App\Project $project
	//  * @return Response
	 
	// public function edit(Project $project)
	// {
	// 	return view('orders.edit', compact('project'));
	// }
 
	// /**
	//  * Update the specified resource in storage.
	//  *
	//  * @param  \App\Project $project
	//  * @return Response
	//  */
	// public function update(Project $project)
	// {
	// 	//
	// }
 
	// /**
	//  * Remove the specified resource from storage.
	//  *
	//  * @param  \App\Project $project
	//  * @return Response
	//  */
	// public function destroy(Project $project)
	// {
	// 	//
	// }
 
}
