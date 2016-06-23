@extends('layout')

@section('content')
    <div id="header">
        <h1>Quick order</h1>
    </div>

    <div id="nav">
        <form id="inputBtn">

            @foreach( $menus  as $menu )
            <input type="button" class="btn" value="{{ $menu->name }}"></input>
            <br>
            
            @endforeach
            
      </form>
    </div>

    <div id="showDetail">

    </div>

    <div id="orderList">
        Order List:
    </div>

    <div id="footer">
        <button type="submit" class="addmenu btn-default"> Add </button>
        <button type="submit" class="confirmOrder btn-default">
                         Confirm Order
            </button>

        <!-- LOGOUT BUTTON -->
      <a class="logoutLink" href="{{ URL::to('logout') }}">Logout</a>

    </div>

            <script>

            $(document).ready(function(){
                var menuList = [];
                var currentMenu = "";
                
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
                    
                    $("#orderList").append('<li>' + '<span id = "item">' +currentMenu + '</span>' + '  <button id ="delete" onclick="remv() value=" X "> X </button> </li>' );
                    menuList.push(currentMenu);

                    
                });

                 $(document).on('click', '#delete', function() {
                    var deleteMenu = $(this).parent().find("#item").text();
                    // alert(deleteMenu);
                    menuList.splice( menuList.indexOf(deleteMenu), 1);
                    alert(menuList);

                    $(this).parent().remove();
                    
                });

                 $(document).on('click', '.confirmOrder', function() {
                    var saveData = $.ajax({
                        type: 'POST',
                        url: "/orderHistory",
                        data: menuList,
                        
                        success: function(resultData) { alert("Save Complete") }
                    });
                    saveData.error(function() { alert("Something went wrong"); });
                });
            });

            


            </script>

@stop
    