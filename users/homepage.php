<?php 

session_start();

 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "conference management";

 $conn = new mysqli($servername,$username,$password,$dbname);

 if($conn ->connect_error)
 {
 	die("connetion failed".$conn->connect_error);
 }
 if(isset($_POST['conferencename'],$_POST['date'],$_POST['starttime'],$_POST['endtime'],$_POST['venue'],$_POST['conferenceroom'],$_POST['description']))
 {
 	$conname= $_POST["conferencename"];
 	$date = $_POST["date"];
 	$stime = $_POST["starttime"];
 	$etime = $_POST["endtime"];
 	$venue = $_POST["venue"];
 	$conroom = $_POST["conferenceroom"];
 	$description = $_POST["description"];

 	if($conname == NULL OR $date == NULL OR $stime == NULL OR $etime == NULL OR $venue == NULL OR $conroom == NULL OR $description == NULL)
 	{
 		echo "<div class ='alert'>";

		echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
		echo "<span style='color:red'>Requirements Empty!</span>";

		echo "</div>";
 	}
 	else
 	{
 		$username = $_SESSION['username'];

 		$sql = "INSERT INTO conferences (conferencename,date,starttime,endtime,venue,conferenceroom,description,username) VALUES ('$conname','$date','$stime','$etime','$venue','$conroom','$description','$username')";

 		//var_dump($sql);

 		if($conn->query($sql) == TRUE)
 		{
 			echo "<div class ='success'>";

			echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
			echo "<span style='color:green'>request sent to admin. Wait till it's being approved</span>";

			echo "</div>";
 		}
 		else
 		{
 			echo "<div>"."<span style = 'color:red'>Conference not created</span>"."</div>";
 		}
 	}
 	//session_destroy();
 	

 	
 }



 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<title>Home page</title>
	<style>
	body
	{
		background:#b3ddcf;
		
	}
	h1
	{
		color:#444048;
		background:#4486ff;
		text-align: center;
		height: 50px;
		border: 1px solid grey;

	}
	h2
	{
		color: #114072;
		transform: translate(0%,-10%);
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
	    transform: translate(0%,0%);
	    transition-duration: 2s;

	}
	h3
	{
		color: #b7e2ba;
		font-size: 25px;
	}
	.sidenav input[type = submit]
	{
		transform: translate(0%,0%);
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


	</style>
</head>
<body>
	<div class="home"><h1 style="font-size: 30px;"><i class="fa fa-home"></i>HOME</h1></div>
	<form method="POST" action="">
		

		<ul>
		  <li><a class="active" href="homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="http:/conference/uploads/currentconferences.php">Current Conferences</a></li>
		  <li><a href="myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="notifications.php">Notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
		</ul>
		<p style="text-align: right; "><a style="color: blue;" href="http:/conference/users/chat_user.php">chat with admin</a></p>

	
			<!--<button><a class="active" href="http://localhost/conference/creat%20conference.php">Creat Conference</a></button>-->
		<?php 
   

		 
        //session_start();
        
		echo "<h2>"."Hello"." ".$_SESSION['username']."!"."</h2>";

		if(isset($_POST['signout']))
		{
			session_destroy();
			//unset($_SESSION['username']);
		    
		   // header("location:http:/conference/login/signin.php");
		    echo "<script>window.location.href='http:/conference/login/signin.php';</script>";
		    

		}
		
		//session_destroy();
		



		?>
		

		<!--<div class="w3-content w3-section">
		  <img class="mySlides" src="https://nyscf.org/wp-content/uploads/2017/05/5I4A4405_RT_conference.jpg">
		  <img class="mySlides" src="https://geospatialmedia.s3.amazonaws.com/wp-content/uploads/2017/10/DGI-2018-bg-img-hero.jpg" >
		  <img class="mySlides" src="https://iamcr.org/sites/default/files/field/image/angelica%20-%20plenary.jpg">

		</div>-->
		<div class="signout">
			<input type="submit" name="signout" value="Sign Out">
			
		</div>
		
		<script>
		var myIndex = 0;
		carousel();

		function carousel() {
		    var i;
		    var x = document.getElementsByClassName("mySlides");
		    for (i = 0; i < x.length; i++) {
		       x[i].style.display = "none";  
		    }
		    myIndex++;
		    if (myIndex > x.length) {myIndex = 1}    
		    x[myIndex-1].style.display = "block";  
		    setTimeout(carousel, 4000); 
		}
		</script>
		<div id="mySidenav" class="sidenav">

			<h3>Creat Conference</h3>

		<a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
		
		<input type="text" name="conferencename" placeholder="name your conference"><br>
		
		<input type="date" name="date" placeholder="date" ><br>
		
		<input type="time" name="starttime" placeholder="start time" ><br>
		
		<input type="time" name="endtime" placeholder="end time" ><br>
		
		<input type="text" name="venue" placeholder="venue"><br>
		
		<input type="text" name="conferenceroom" placeholder="room number"><br>
		
		<input type="text" name="description" placeholder="description" ><br><br>

		<input type="submit" name="" placeholder="creat conference" >


		</div>


		<span style="font-size:25px;cursor:pointer;" onclick="openNav()">&#9776; Creat Conference</span>

		<script>
		function openNav() {
		    document.getElementById("mySidenav").style.width = "100%";
		}

		function closeNav() {
		    document.getElementById("mySidenav").style.width = "0";
		}

		</script>
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
       <style type="text/css">
       	.alert
       {
	        padding: 20px;
		    background-color:rgb(0.1,0.3,0.5,0.2);
		    color: red;
		    text-align: center;
		    border:1px solid red;
       }

       	
       </style>

     
		





		

	</form>


</body>
</html>