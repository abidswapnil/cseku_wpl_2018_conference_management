<?php 

session_start();
require 'config.php';



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
    table, td
    {
        border: 1px solid white;  
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 725px;
	    padding-left: 55px;
	    text-align: left;
	    width: 100%;
	    background: #e5dcc3;
    }   
    tr:nth-child(even){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 80px;
	    padding-left:  65px;
	    text-align: left;
	    width: 100%;
    }


	</style>
</head>
<body>
	<h1></h1>
	<form method="POST" action="">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1></header>
		<div class="news" >
			<div class="rules0" style="overflow-y:scroll;">
			     <h3 style="color: #444048; text-align: left; padding-left: 20px;">QUICK ASSISTS</h3>
			     <p style="text-align: left; padding-left: 20px; opacity: 0.9; color: black;">Our most frequently asked question & answers are just on click away.</p><hr>
			     <p style="text-align: left; padding-left: 50px;">
			     <?php

			       $sql = "SELECT questions_outside.question , questions_outside.answer FROM questions_outside";

			       $result = $conn->query($sql);

			       if($result ->num_rows > 0)
			       { 
			       	   $i = 0;
			       	   echo "<table><tr><th></th><th></th></tr>";
			       	  while($row = $result->fetch_assoc())
			       	  {
			       	  	 $i++;
			       	  	 $question = $row['question'];
			       	  	 $answer = $row['answer'];

			       	  	 if($answer == NULL)
			       	  	 {
			       	  	 	echo "<tr><td>".$i."."." ".$question."</td><td><span style='color:red'>*pending</span></td></tr>";
			       	  	 }
			       	  	 else
			       	  	 {
			       	  	 	echo "<tr><td>".$i.".".$question."</td><td>".$answer."</td></tr>";
			       	  	 }

			       	  	
			       	  }
			       }


			      ?>
			     
			     </p>
				
			</div><br><br>

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