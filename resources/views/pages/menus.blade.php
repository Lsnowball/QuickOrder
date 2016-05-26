@extends('layout')

@section('content')
    <div id="header">
        <h1>Quick order</h1>
    </div>

    <div id="nav">
        <input id="selectOrder">
            <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Cheese Burger
            </button>
            <br>

            <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Ham Burger
            </button>
            <br>
            <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Chicken Burger
            </button>
            <br>
            <button type="submit" class="btn btn-default">
                        <i class="fa fa-plus"></i> Fish Burger
            </button>
        </input>
    </div>

    <div id="section">

        Details!

    </div>

    <div id="footer">
        Thanks for your order!
    </div>

@stop
    