<!DOCTYPE html>
<html>
<head>
	<title>All users</title>
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

	/*h1
	{
		height: 100px;
		background: #939670;
		text-align: center;

	}*/
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table,td
    {
        border: 1px solid #8e8e8e;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 195px;
	    padding-left: 165px;
	    text-align: left;
	    

    }
    tr:hover {background-color: #f3ff8c;}
    tr:nth-child(even){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid #8e8e8e;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 100px;
	    padding-left: 185px;
	    text-align: left;
	    width: 100%;

    }

	</style>
</head>
<body>
<form method="" action="POST">
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


</ul><br><br>
	</form>

</body>
</html>
<?php 
		require 'config.php';
		/*
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "conference management";

		$conn = new mysqli($servername,$username,$password,$dbname);

		if($conn->connect_error)
		{
			die("connection failed".$conn->connect_error);
		}
		*/

		$sql = "SELECT user_id,firstname,lastname,username,email FROM user";

		$result = $conn->query($sql);

		if($result ->num_rows >0)
		{
			echo "<table><tr><th>User ID</th><th>First name</th><th>last name</th><th>Username</th><th>E-mail</th></tr>";

			while($row = $result->fetch_assoc())
			{
				$uid = $row["user_id"];
				$fname = $row["firstname"];
				$lname = $row["lastname"];
				$uname = $row["username"];
				$email = $row["email"];

				echo "<tr><td>".$uid."</td><td>" . $fname. "</td><td>" . $lname. " </td><td>" . $uname. "</td><td>".$email."</td></tr>";

			}
			echo "</table>";

		}










?>