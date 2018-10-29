<?php

require 'config.php';
session_start(); 


?>
<!DOCTYPE html>
<html>
<head>
	<title>admin | current conferences</title>
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
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table,td
    {

        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 15px;
	    padding-left: 30px;
	    text-align: left;

    }
    tr:hover {background-color: #f3ff8c;}
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 100px;
	    padding-left: 23px;
	    text-align: left;

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
  <li><a href="#contact">Current Conferences</a></li>
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

	<?php
            $num_conferences = 0;
			$notifications_id = array();
			$string = "";
			$username = $_SESSION['username'];

	      

	       $sql ="SELECT * FROM conferences WHERE status= '1'"; 

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{ 
				$i=0;
                   
				echo "<hr><table><tr><th>name</th><th>Date</th><th>Start</th><th>End</th><th>Venue</th><th>Room</th><th>Manager</th><th>Edit</th></tr>";

				while($row = $result->fetch_assoc())
				{
					$i++;
					
					#$papers = $_SESSION['papers'];

                    $conferences_id[$i] = $row['con_id'];
					$conference = $row['conferencename'];
					$date = $row['date'];
					$start = $row['starttime'];
					$end = $row['endtime'];
					$venue = $row['venue'];
					$room = $row['conferenceroom'];
					$description = $row['description'];
					$user = $row['username'];
					//$papers = $row['papers'];



					echo "<tr><td><a href='http:/conference/admin/papers.php'>".$conference."</a></td><td>".$date."</td><td>".$start. "</td><td>".$end."</td><td>".$venue."</td><td>".$room."</td><td>".$user."</td><td><input type='submit' name='assign".$i."' value='assign new manager'></td></tr>";

							
																														
				}
				echo "</table>";

				$num_conferences = $i;
			}
			for ($i=1; $i<=$num_conferences ; $i++) 
			{ 
				$assign_btn = 'assign'.$i;

				if(isset($_POST[$assign_btn]))
				{
					$selected_id = $conferences_id[$i];

					$sql ="SELECT conferences.* FROM conferences WHERE conferences.con_id = '$selected_id'";

					$result = $conn->query($sql);

					if($result->num_rows >0)
					{
						while($row = $result ->fetch_assoc())
						{
							$con_id = $row['con_id'];
							$conference = $row['conferencename'];
							$_SESSION['conferencename'] = $conference;
							$_SESSION['con_id']= $con_id;
						}
					}

					echo "<script>window.location.href = 'http:/conference/admin/assign_new_manager.php';</script>";
				}
				
			}
 
	 ?>




		

	</form>

</body>
</html>