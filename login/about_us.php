<?php 

session_start();
require 'config.php';



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
	    height: 550px;
	    width: 98%;
	    text-align: center;
	    transform: translate(0%,5%);
	   
    }
    .about
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
    .description
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#b7dbe5;
	    height: 450px;
	    width: 98%;
	    text-align: center;
	    width: 70%;
	    transform: translate(20%,0%);
	    border: 1px solid white;
	    box-shadow: 5px 5px 5px grey;

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
    .swapnil
    {
    	transform: translate(50%,0%);
    	background-color: white;
    	box-shadow: 5px 5px 5px grey;
    	height: 420px;
    	width: 300px;



    }
    .hasib
    {
    	transform: translate(180%,-100%);
    	background-color: white;
    	box-shadow: 5px 5px 5px grey;
    	height: 420px;
    	width: 300px;

    }
    .niloy
    {
    	transform: translate(310%,-200%);
    	background-color: white;
    	box-shadow: 5px 5px 5px grey;
    	height: 420px;
    	width: 300px;

    }
    .bepary
    {
    	transform: translate(440%,-300%);
    	background-color: white;
    	box-shadow: 5px 5px 5px grey;
    	height: 420px;
    	width: 300px;

    }
    img
    {
    	height: 200px;
    	border-radius: 100px;
    	box-shadow: 5px 5px 5px grey;
    	transform: translate(0%,20%);
    }


	</style>
</head>
<body>
	<h1></h1>
	<form method="POST" action="">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1></header>
		<div class="news" >
			<h2 style="color: #2f3235;">OUR TEAM</h2><hr width="30%">
			<h4 class="team" style="text-align: center; color:#414447;">Our team will always there for you.Stay connected. </h4><br>

			    <div class="swapnil">
			    	<img src="https://scontent.fdac10-1.fna.fbcdn.net/v/t1.0-9/13417604_1649466438609225_5501681382360791899_n.jpg?_nc_cat=105&_nc_ht=scontent.fdac10-1.fna&oh=c8cb5de448d45078a1c4e310783164cf&oe=5C47288E">
			    	<div style="transform: translate(0px,100px);"><hr>
			    		<i class="fa fa-envelope" aria-hidden="true" style="font-size: 23px;"></i><br><br>
			    		<a href="" style="font-size:20px;">abidswapnil10@.com</a>
			    	</div>
				
					
				</div>
				<div class="hasib">
					<img src="https://scontent.fdac10-1.fna.fbcdn.net/v/t1.0-9/10917397_1421000511524690_205971307126604693_n.jpg?_nc_cat=110&_nc_ht=scontent.fdac10-1.fna&oh=e3c7e1d1165a15b4b7ac5d0e2903bc87&oe=5C440943">
					<div style="transform: translate(0px,100px);"><hr>
						<i class="fa fa-envelope" aria-hidden="true" style="font-size: 23px;"></i><br><br>
						<a href="" style="font-size: 20px;">abdulhasibuddin@gmail.com</a>

					</div>
				
				

			    </div>
			    <div class="niloy">
			    	<img src="https://scontent.fdac10-1.fna.fbcdn.net/v/t1.0-9/38019168_1861866847454222_2607620511080906752_n.jpg?_nc_cat=103&_nc_ht=scontent.fdac10-1.fna&oh=af564376eeef84d73195fd6fd6d6d36d&oe=5C625BED">
			    	<div style="transform: translate(0px,100px);"><hr>
			    		 <i class="fa fa-envelope" aria-hidden="true" style="font-size: 23px;"></i><br><br>
			    		 <a href="" style="font-size: 20px;">niloy21@gmail.com</a>

			    	</div>
			    	  
				
				
			    </div>
			    <div class="bepary">
			    	<img src="https://scontent.fdac10-1.fna.fbcdn.net/v/t1.0-9/25508050_1762147224087709_7986605642048561585_n.jpg?_nc_cat=104&_nc_ht=scontent.fdac10-1.fna&oh=0a1d474b2fddc85e4c07bce142e3e12b&oe=5C48DC37">
			    	<div style="transform: translate(0px,100px);"><hr>
			    		<i class="fa fa-envelope" aria-hidden="true" style="font-size: 23px;"></i><br><br>
			    		<a href="" style="font-size: 20px;">durjoybapery@gmail.com</a>

			    	</div>
			    	  
				
				
			    </div>
				
				

			</div>
			
			

		
			</div><br><br>
			<div class="about">
				<div class="description" style="overflow-y: scroll;" >
					<h2>About Us<hr></h2>
					<?php

						$sql = "SELECT about_us.about_us FROM about_us";

						$result = $conn->query($sql);
						if($result ->num_rows >0)
						{
							while($row = $result->fetch_assoc())
							{
								$about_us = $row['about_us'];
							}
							echo "<p style='text-align:left;'>".$about_us."</p>";
						}


					 ?>
				</div>
			</div>

	




	</form>


</body>
</html>