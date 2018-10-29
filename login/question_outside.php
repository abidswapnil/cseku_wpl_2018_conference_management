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
		border: 1px solid grey

		
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
    	width: 70%;
    	transform: translate(22%,0%);
    	box-shadow: 5px 5px 5px grey;

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
	    background-color:#e5dcc3;
	    height: 280px;
	    width: 340px;
	    transform: translate(20%,10%);
	    text-align: center;
	    border: 1px solid white;
    }
    .phone
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#e5dcc3;
	    height: 280px;
	    width: 340px;
	    transform: translate(150%,-90%);
	    text-align: center;
	    border: 1px solid white;
    }
    .rules0 textarea
	{
		width: 95%;
	    height: 200px;
	    padding: 10px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;
	    transform: translate(0%,0%);

	}
	.rules0 input[type = 'email']
	{
		width: 95%;
	    height: 50px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;
	}
	.rules0 input[type = 'submit']
	{
		background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;

	}


	</style>
</head>
<body>
	<h1></h1>
	<form method="POST" action="">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1></header>
		<div class="news" >
			    <?php


			 	    if(isset($_POST['question'],$_POST['email1']))
			 	    {
			 	    	$question = $_POST['question'];
			 	    	$email1 = $_POST['email1'];

		 	    		$sql = "INSERT INTO questions_outside (question,email,do) VALUES ('$question','$email1','1')";

			 	    	if($conn->query($sql) == TRUE)
			 	    	{
			 	    		echo "<span style='color:#1a7a00;'>*your question is sent to us!</span>";
			 	    	}
		 	    	
			 	    } 

		 	    ?>

				</p>

				<?php 

				   $sql = "SELECT questions_outside.do FROM questions_outside";

				   $result = $conn->query($sql);

				   if($result ->num_rows > 0)
				   {
				   	  while($row = $result->fetch_assoc())
				   	  {
				   	  	 $do = $row['do'];
				   	  }
				   	  if($do == 1)
				   	  {
				   	  	 echo "<div class='rules0'>";
				   	  	 echo "<h3 style='color: #444048; text-align: left; padding-left: 20px;'>Question Us</h3><hr>";
				   	  	 echo "<p style='text-align: left; padding-left: 20px;'>Feel free to send all of your questions.";
				   	  	 echo "<h4 style='text-align: left;padding-left: 20px;'>Your question:</h4><br>";
				   	  	 echo "<textarea name='question' rows='10' cols='20' placeholder='put your question here' required=''></textarea><br><br>";
				   	  	 echo "<input type='email' name='email1' placeholder='your email address' required=''><br><br>";
				   	  	 echo "<input type='submit' name='submit' value='question us'>";
				   	  	 echo "</div>";
				   	  }
				   	  elseif($do == 0)
				   	  {
				   	  	echo "<p style='text-align:center; font-size:20px; color:red;'>*You can not question us for somedays.option will be available soon!</p>";
				   	  }
				   }




				 ?>


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