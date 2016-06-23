<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Make Order</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <!--
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
 -->       


        <style>
            html, body {
                height: 100%;
            }

           
            #header {
                background-color:black;
                color:white;
                text-align:center;
                padding:5px;
            }
            #nav {
                line-height:30px;
                background-color:#eeeeee;
                height:300px;
                width:150px;
                float:left;
                padding:5px;
            }
            #showDetail {
                width:350px;
                float:left;
                padding:10px;
            }
            #orderList {
                line-height:30px;
                background-color:#eeeeee;
                height:300px;
                width:200px;
                float:right;
                padding:5px;
            }
            #footer {
                background-color:black;
                color:white;
                clear:both;
                text-align:center;
                padding:5px;
            }
            a.logoutLink {
                color:white;
                float:right;
            }


            
        </style>
    </head>
    <body>
        @yield('content')
    </body>
</html>