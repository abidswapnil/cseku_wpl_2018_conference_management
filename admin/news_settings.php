<?php 
require 'config.php';
session_start();
$sql = "SELECT admin.* FROM admin";
$result = $conn->query($sql);
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		$admin = $row["username"];
		$email = $row['email'];
		$password =$row["password"];
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin | news settings</title>
	<style>
	body
	{
		background:#8fc1b7;
	}
	h1
	{
		background:#939670;
		height:155px;
		text-align: center;
	}
	h2
	{
		text-align: left;
		color: #7c2100;
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
	img
	{
		height: 155px;
		width: 200px;
		transform: translate(389%,0%);
	}
	div
	{
		transform: translate(3.9%,-23%);

	}
	.news
	{
		padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#96c3ce;
	    width: 98%;
	    height:1000px;
	    transform: translate(0%,5%);
	    text-align: center;
	}
	.news textarea
	{
		width: 99%;
	    height: 300px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;
	}
    .alert
    {
        padding: 18px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 91%;
	    transform: translate(-1%,-800%);

    }
   .closebtn
    {
	    margin-left: 30px;
	    color: black;
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
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    transform: translate(0%,-750%);

    }
    .news input[type = 'submit']
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
	<form method="POST" action="">
		<header>
			<h1>ADMIN

				<div class="image">
				<img src="https://www.nu-techassociates.co.uk/wp-content/uploads/2015/04/DSC0210.jpg">
				</div>

			</h1>
			
		</header>


<ul>
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="users.php">Users</a></li>
  <li><a href="member.php">Members</a></li>
  <li><a href="http:/conference/admin/current_conferences.php">Current Conferences</a></li>
  <li><a href="#contact">Assign Author</a></li>
  <li><a href="#contact">Publications</a></li>
  <li><a href="#contact">Approved papers</a></li>
  <li><a href="http:/conference/admin/news_settings.php">News</a></li>
  <li><a href="request.php">Requests</a></li>
  <li><a href="http:/conference/admin/settings.php">Settings</a></li>
  <li style="float:right"><a href="http:/conference/admin/question_outside_admin.php">Anonymus Questions</a></li>
  <li style="float:right"><a href="http:/conference/admin/question.php">User Questions</a></li>
  <li style="float:right"><a href="http:/conference/admin/complain.php">Complain</a></li>
 


</ul>
<div class="news">
	<h2>Anounce news<hr></h2>
	<p style="text-align: left; padding-left: 10px;">Write news about something new, that users don't know.

     <?php

	 if(isset($_POST['news']))
	 {
	 	$news = $_POST['news'];

	 	if($news == NULL)
	 	{
	 		echo "<span style='color:red;'>*null</span>";
	 	}
	 	else
	 	{
	 		$sql ="UPDATE news
	 		       SET news.news = '$news'
	 		       WHERE news.news_id ='1'";

	 		if($conn->query($sql) == TRUE)
	 		{
	 			echo "<span style='color:#1c5e1d;'>*news updated</span>";

	 		}
	 		else
	 		{
	 			echo "<span style='color:red;'>*error</span>";
	 		}

	 		

	 	}
	 } 



	?>


	</p><br>
	<textarea name="news" rows="20" cols="80"></textarea><br><br>
	 <input type="submit" name="announce" value="announce">

	


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


</body>
</html>