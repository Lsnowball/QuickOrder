@extends('layouts.app')

@section('content')
<div id="header">
	<h2>Orders</h2>
</div>
<div id="navi">
	</div>
	<div id="detail">
 
    @if ( !$orders->count() )
        You have no orders
    @else
        <ul>
            @foreach( $orders as $order)
                <li><a href="{{ route('orders.show', $order->slug) }}">{{ $order->order_id }}</a></li>
            @endforeach
        </ul>
    @endif
</div>
@endsection