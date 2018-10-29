<?php 

session_start();
require 'config.php';



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
	<title>Home page</title>
	<style>
	body
	{
		background:#b3ddcf;
		
	}
	header
	{
		height: 200px;
		background:#e0bd9c;
		border: 1px solid grey;

		
	}
	h1
	{
		color:#444048;

	}
	h2
	{
		color: #114072;
		text-align: center;
	}
	button
	{
		transform: translate(1150%,-1303%);
	}
	img
	{
		height: 155px;
		width:200px;
		transform: translate(660%,-339.9%);
	}
	ul 
	{
	    list-style-type: none;
	    margin: 0;
	    padding: 0;
	    overflow: hidden;
	    background-color: #333;
    }
	li 
	{
	    float: left;
	    border-right:1px solid #bbb;
	}
	li:last-child 
	{
	    border-right: none;
	}
	li a 
	{
	    display: block;
	    color: white;
	    text-align: center;
	    padding: 14px 16px;
	    text-decoration: none;
	}
	li a:hover:not(.active) 
	{
	    background-color:#72706f;
	}

	.active 
	{
	    background-color: #70b243;
	}
	.signout
	{
		transform: translate(95%,96%);

	}
	body
	{
       font-family: "Lato", sans-serif;
	}
	.sidenav 
	{
	    height: 100%;
	    width: 0;
	    position: fixed;
	    z-index: 1;
	    top: 0;
	    left: 0;
	    background-color: #111;
	    overflow-x: hidden;
	    transition: 0.5s;
	    padding-top: 60px;
	    text-align:center;
	    background: rgb(0,0,0,0.8);
	}
	.sidenav a 
	{
	    padding: 8px 8px 8px 32px;
	    text-decoration: none;
	    font-size: 25px;
	    color: #818181;
	    display: block;
	    transition: 0.3s;

	}
	.sidenav a:hover{
	    color: #f1f1f1;
	}
	.sidenav .closebtn
	 {
	    position: absolute;
	    top: 0;
	    right: 25px;
	    font-size: 36px;
	    margin-left: 50px;
	}

	@media screen and (max-height: 450px) 
	{
	  .sidenav {padding-top: 15px;}
	  .sidenav a {font-size: 18px;}
	}
	.sidenav input[type = text],
	.sidenav input[type = date],
	.sidenav input[type = time]
	{
	    width: 50%;
	    height: 30px;
	    padding: 12px;
	    margin: 10px 0;
	    display: inline-block;
	    border-bottom: 3px solid #aaa;
	    box-sizing: content-box;
	    border: none;
	    background: #E8E8E8;
	    outline: none;
	    box-shadow: 0 0 10px 0 #31b1d8;
	    transition: .3s;
	    padding-right: 7px;
	    padding-left: 3px;
	    padding-bottom: 2px;
	    transform: translate(0%,190%);
	    transition-duration: 2s;

	}
	h3
	{
		color: #b7e2ba;
		font-size: 25px;
	}
	.sidenav input[type = submit]
	{
		transform: translate(0%,350%);
	}
	.success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;

    }

    .closebtn
	{
	    margin-left: 15px;
	    color: white;
	    font-weight: bold;
	    float: right;
	    font-size: 22px;
	    line-height: 20px;
	    cursor: pointer;
	    transition: 0.3s;
	}
	.closebtn:hover
	{
	    color: black;
	}
   .alert
   {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
   }
   .alert
   {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 95%;
	    transform: translate(0%,-925%);

   }
   .closebtn
   {
	    margin-left: 30px;
	    color: black
	    font-weight: bold;
	    float: right;
	    font-size: 30px;
	    line-height: 10px;
	    cursor: pointer;
	    transition: 0.3s;
	    transform: translate(10%,15%);
   }
   .closebtn:hover
   {
	    color: black;
   }
   .news
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#a2c3c4;
	    height: 650px;
	    width: 98%;
	    text-align: center;
	    transform: translate(0%,5%);
	   
    }
    .upbar
    {
    	padding: 1px;
    	padding-top: 10px;
    	padding-bottom: 40px;
	    background-color:#79afaf;
	    height: 10px;
	    width: 2070px;
	    text-align: center;
	    width: 99%;
	    transform: translate(0%,-80%);

    }
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    transform: translate(0%,-925%);

    }
    .link
    {
    	text-align: left;
    }
    .rules0
    {
    	background-color: #e5dcc3;
    	height:640px;
    	border: 2px solid #cee4ed;
    	width: 100%;
    	transform: translate(0%,0%);
    	

    }
    .rules1
    {
    	background-color: #e5dcc3;
    	height: 950px;
    	border: 2px solid #cee4ed;
    	border-radius: 20px;
    }
    .rules2
    {
    	background-color: #c3c4db;
    	height:200px;
    	border: 2px solid #cee4ed;
    	border-radius: 20px;
    }
    .rules3
    {
    	background-color: #e2cece;
    	height:200px;
    	border: 2px solid #cee4ed;
    	border-radius: 20px;

    }
    table 
	{
      border-collapse: collapse;
      padding: 12px;


    }
    .rules0 input [type='text']
    {
    	padding-left: 40px;
    }
    .email
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#accc9b;
	    height: 100px;
	    width: 160px;
	    transform: translate(80%,10%);
	    text-align: center;
	    border: 1px solid white;
	    

    }
    .phone
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#a4d2cc;
	    height: 100px;
	    width: 160px;
	    transform: translate(210%,-90%);
	    text-align: center;
	    border: 1px solid white;
	   
    }
    .facebook
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#b0d7e5;
	    height: 100px;
	    width: 160px;
	    transform: translate(340%,-190%);
	    text-align: center;
	    border: 1px solid white;
	   

    }
    .instagram
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#cc9b9b;
	    height: 100px;
	    width: 160px;
	    transform: translate(470%,-290%);
	    text-align: center;
	    border: 1px solid white;
	    

    }
    .side
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 180px;
	    width: 440px;
	    transform: translate(315%,-390%);
	    text-align: center;
	    border: 1px solid white;

    }




	</style>
</head>
<body>
	<h1></h1>
	<form method="POST" action="">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1></header>
		<div class="news" >
			<div class="rules0">
			     <h3 style="color: #444048; text-align: center; padding-left: 20px;">CONTACT US</h3>
			     <hr width="30%">
			     <p style="text-align: center; padding-left: 20px; opacity: 0.9; color: black;">Feel always free to contact with us.</p>
			     <p style="text-align: left; padding-left: 50px;"></p>
			     
			     	
			     	<div class="email">
			     		
			     		
			     		<i class="fa fa-envelope" aria-hidden="true" style="font-size: 23px;"></i>
			     		<a href=""><p style="font-size: 10px">conferencemanagement10@gmail.com</p></a>
			     		<h2 style="text-align: center; font-size:15px; ">contact us through email</h2>
			     		 we will reply within one day.
			     	</div>
			     	<div class="phone">
			     		<i class="fas fa-phone" style="font-size: 33px;"></i>

			     		<a href=""><p style="font-size: 14px;">+880-1679123120</p></a>
			     		<h2 style="text-align: center; font-size: 15px;">contact us over phone</h2>
			     		You can immediately contact over phone call.


			     	</div>
			     	<div class="facebook">
			     		<i class="fab fa-facebook-f" style="font-size: 33px;"></i>

			     		<a href=""><p style="font-size: 14px;">@conferencemanagement</p></a>
			     		<h2 style="text-align: center; font-size: 15px;">find us on facebook</h2>
			     		You can folow our facebook page.


			     	</div>
			     	<div class="instagram">
			     		<i class="fab fa-instagram" style="font-size: 43px;"></i>

			     		<a href=""><p style="font-size: 10px;">www.instagram.com/yourchair/</p></a>
			     		<h2 style="text-align: center; font-size: 15px;">find us on instagram</h2>
			     		folow us on @instagram and see new posts.


			     	</div>
			     

				
			</div><br><br><hr>

		</div>
		<script type="text/javascript">

			var close = document.getElementsByClassName("closebtn");
		    var i;

		    for (i = 0; i < close.length; i++) 
		    {
		    
			    close[i].onclick = function(){

			    var div = this.parentElement;

			    div.style.opacity = "0";
			    setTimeout(function(){ div.style.display = "none"; }, 600);
			    }
		    }

      </script>



	</form>


</body>
</html>