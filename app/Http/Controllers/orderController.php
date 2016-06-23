<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Order;

class orderController extends Controller
{
    /**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$orders = Order::all();
		return view('orders.index', compact('orders'));
	}

	//fetch data from database.
	public function fetch() {
		$userId = \Auth::user()->id;

  		$orders = Order::where('user_id', $userId)->orderBy('created_at', 'desc')->take(5)->get();

  		// Return as json
  		return Response::json($orders);
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
