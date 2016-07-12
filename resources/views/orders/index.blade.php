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

        <table class="orderHistory">
            <tr>
                <th>Order Number</th>
                <th>Order Details</th>
                <th>Total Price</th>
                <th>Time </th>
            </tr>
            
            @foreach( $orders as $order )
                
                <tr>
                    <td>{{ $order->id }}</td>
                    <td><?php $orderDetails=App\OrderDetail::where('order_id', $order->id)->get(); foreach($orderDetails as $orderDetail) { $name=App\Menu::where('id', $orderDetail['menu_id'])->value('name'); echo $name.', ';}   ?></td>
                    <td>{{ $order->total_price }}</td>
                    <td>{{ $order->created_at }}</td>
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