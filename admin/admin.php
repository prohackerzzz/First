<?php
/*
session_start();
if(!$_SESSION['auth']){
    header("location:login.html");
}
session_unset();
session_destroy();
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <!--<![endif]-->
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="admin.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class="header">
            <ul>
                <li><a href="javascript:void(0);" class="icon" onclick="myFunction()">
                    <i class="fa fa-bars"></i></a></li>
                <li><a id="left" href="#">Welcome to the Dashboard</a></li>
                <li id ="centre"><a href="#">Welcome to the Dashboard</a></li> 
                <li><button>Logout</button></li>
                
                <li><i class="fa fa-user-circle" aria-hidden="true"></i></li>

                  </a>
            </ul>
        </div>
        <div class="sidebar" id="">
            <ul>
                <li><a href="#">Dashboard</a></li>
                <li><a href="#">Category</a><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>              
                <li><a href="#">Products</a><span><i class="fa fa-angle-down" aria-hidden="true"></i></span></li>
                <li><a href ="#">Manage Users</a></li>
                <li><a href="#">Orders</a></li>
                <li><a href="#">Availibility</a></li>

            </ul>
        </div>
        
        <div class="container">
            <iframe src="category-add.html" title="W3Schools Free Online Web Tutorials">
            </iframe>
        </div>
    
        
        <script >
            function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
        </script>
    </body>
</html>