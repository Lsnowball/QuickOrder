@extends('layout')

@section('content')
    <div id="header">
	   <h2>Orders</h2>
    </div>

    <div id="nav">
    </div>

	<div id="showDetail">
 
    @if ( !$orders->count() )
        You have no orders
    @else
        <table class="orderList">
            <tr>
                <th>Order Number</th>
                <th>Order Details</th>
                <th>Total Price</th>
            </tr>
            
            @foreach( $orders as $order)
                <!-- <li><a href="{{ route('orders.show', $order->slug) }}">{{ $order->order_id }}</a></li> -->
                <tr>
                    <td>{{ $order->id }}</td>
                     <td><?php $orderDetails=App\OrderDetail::where('order_id', $order->id)->orderBy('menu_id')->get(); foreach($orderDetails as $orderDetail) { $menu=App\Menu::where('id', $orderDetail->menu_id)->get(); echo $menu->name.', ';} ?></td> 
                    
                    <td>{{ $order->total_price }}</td>
                </tr>
              
            @endforeach
        </table>
    @endif
</div>

<div id="footer">
        <a class="viewHistory" href="{{ URL::to('home') }}">Back to Home Page</a>
        
        <!-- LOGOUT BUTTON -->
      <a class="logoutLink" href="{{ URL::to('logout') }}">Logout</a>

    </div>
@endsection