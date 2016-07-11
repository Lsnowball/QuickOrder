@extends('layout')

@section('content')
    <div id="header">
        <h1>Quick order</h1>
    </div>


    <div id="nav">
        

            @foreach( $menus  as $menu )
            <input type="button" class="btn" value="{{ $menu->name }}"></input>
            <br>
            
            @endforeach
            
      
    </div>

    <div id="showDetail">

    </div>

    <div id="orderList">
        <form class="orderListForm" method="POST" action="/confirm">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

        Order List:
            <input type="submit" class="confirmOrder btn-default">
            <div id="menuList">
            <!-- <input type="text" name="menu" value="Lemon"> -->
        </div>

        </form>
    </div>

    <div id="footer">
        <a class="viewHistory" href="{{ URL::to('orderHistory') }}">View Order History</a>
        <button type="submit" class="addmenu btn-default"> Add </button>
        

        <!-- LOGOUT BUTTON -->
      <a class="logoutLink" href="{{ URL::to('logout') }}">Logout</a>

    </div>
    
            <script>

            $(document).ready(function(){
                var menuList = [];
                var currentMenu = "";
                var index = 0;
                
                $(".btn").bind("click", function() {
                    
                    var str = $(this).prop("value");
                    currentMenu = str;
                    
                    str = str.replace(/\s/g,'');
                    var newStr = str.toLowerCase();
                    var htmlValue = newStr + ".jpg";

                    var price = 0;

                    $.get('/home/'+currentMenu, function( data ) {
                           
                        price = data.price;
                        $("#showDetail").html('<img src = "/image/' + htmlValue + '"></img> <p id="price"> Price: $' + price + '</p>');
                    
                    });
                     
                    
                });

                $(".addmenu").bind("click", function() {
                    
                    $("#menuList").append('<li> <input type="text" name="menu[]" value="' + currentMenu + '" > <button id ="delete" type="button" value=" X ">X</button> </li>' );
                    

                                    
                });

                $(document).on('click', '#delete', function() {
                    
                    $(this).parent().remove();
                    
                });

                

            });

            


            </script>

@stop
    