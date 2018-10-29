<?php 
 session_start();
require 'config.php'; ?>

<!DOCTYPE html>
<html>
<style type="text/css">
    body
    {
    	background: #b3ddcf;
    }
	h1
	{
		color:#444048;
		background:#4486ff;
		text-align: center;
		height: 50px;
		border: 1px solid grey;

	}
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table, td
    {
        
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 20px;
	    padding-left: 30px;
	    text-align: left;
	    width: 100%;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;  border: 1px solid grey;}
    tr:nth-child(odd){ border: 1px solid grey;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid black;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 57px;
	    padding-left: 40px;
	    text-align: left;
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
	.conference
	{
		width: 100%;
		height: 1px;
	    padding: 30px 0px;
	    padding-top: 10px;
	    text-align: center;
	    background-color: lightblue;
	}
	.alert 
	{
	    padding: 20px;
	    background-color:lightblue;
	    color: red;
	    text-align: center;
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
	.aware
	{
		padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 98%;
	    transform: translate(0%,-90%);
	}

</style>
<head>
	<title>my conferences</title>
	<h1 style="font-size: 30px;">My conferences</h1>

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
		</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="">
		
<?php

			$num_conferences = 0;
			$conferences_id = array();
			$string = "";
			$username = $_SESSION['username'];

			$sql ="SELECT * FROM conferences WHERE status= '1' AND conferences.username='$username'"; 

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;

				echo "<table><tr><th>Name</th><th>Date</th></th><th>Start</th></th><th>End</th></th><th>Venue</th></th><th>Room</th></th><th>Descriptoion</th><th>papers</th><th>Change</th></tr>";

				while($row = $result->fetch_assoc())
				{
					$i++;
					

                    $conferences_id[$i] = $row['con_id'];
					$conference = $row['conferencename'];
					$date = $row['date'];
					$start = $row['starttime'];
					$end = $row['endtime'];
					$venue = $row['venue'];
					$room = $row['conferenceroom'];
					$description = $row['description'];


					echo "<tr><td><a href = 'http:/conference/users/papers_1.php'>".$conference."</a></td><td>" . $date. "</td><td>" . $start. "</td><td>" . $end. "</td><td>" . $venue. "</td><td>" . $room. "</td><td>" . $description. "</td><td><input type='submit' name='Papers".$i."' style='height:30px; width:100px; padding:2px; margin:0px; background-color:#92dba7;' value='check papers'></td><td><input type='submit' name='Edit".$i."'style='height:30px; width:60px; padding:2px; margin:0px; background-color:green;' value='Edit'>"."<br><br>"."<input type='submit' name='Delete".$i."'style='height:30px; width:60px; padding:2px; margin:0px; background-color:red;' value='Delete'></td></tr>";


					
				}
				echo "</table>";

				

				 $num_conferences = $i;

				
			}
			 else
            {
            	echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "No conferences";

				echo "</div>";
            }
	for($i = 1; $i <= $num_conferences; $i++)
	{
	  //echo "id:"." ".$id[$i]." ";
	  $Edit_btn = 'Edit'.$i;
	  $Delete_btn = 'Delete'.$i;
	  $Check_btn ='Papers'.$i;



	  if (isset($_POST[$Edit_btn])) 
	  {
	  	//echo "<form action='' method='POST'>";

	  	$selected_id = $conferences_id[$i];

	  	$_SESSION['con_id'] = $selected_id;

	    $sql = "SELECT papers.* FROM papers WHERE papers.con_id ='$selected_id'";

		$result = $conn->query($sql);

		if($result ->num_rows >0)
		{
			return 0;

		}
		else
		{


                $sql= "SELECT * FROM conferences WHERE conferences.con_id='$selected_id' AND conferences.status='1'";

                $result= $conn->query($sql);

                if($result->num_rows >0)
                {
                	
                	echo "<table style='border-collapse: collapse; padding: 8px;'>";

                	while($row= $result->fetch_assoc())
                	{

                		$conference1 = $row['conferencename'];
						$date1 = $row['date'];
						$start1 = $row['starttime'];
						$end1 = $row['endtime'];
						$venue1 = $row['venue'];
						$room1 = $row['conferenceroom'];
						$description1 = $row['description'];               						  	

					  	echo "<tr style ='background-color: #a5ed7b;'><td><input type='text' name='conferencename' placeholder='conference name'></td>";
					  	echo "<td><input type='date' name='date' placeholder='date'></td>";
					  	echo "<td><input type='time' name='starttime' placeholder='start time'></td>";
					  	echo "<td><input type='time' name='endtime' placeholder='end time'></td>";
					  	echo "<td><input type='text' name='venue' placeholder='venue' ></td>";
					  	echo "<td><input type='text' name='conferenceroom' placeholder='room'></td>";
					  	echo "<td><input type='textarea' name='description' placeholder='description...'></td></tr>";									  	

                	}
                	echo "</table>";
                	
                	if(isset($_POST['conferencename'] , $_POST['date'] , $_POST['starttime'], $_POST['endtime'] ,$_POST['venue'] , $_POST['conferenceroom'] , $_POST['description']))
				  	{

				  		$conference2 = $_POST["conferencename"];
				  		$date2 = $_POST["date"];
				  		$start2 = $_POST["starttime"];
				  		$end2 = $_POST["endtime"];
				  		$venue2 = $_POST["venue"];
				  		$room2 = $_POST["conferenceroom"];
				  		$description2 = $_POST["description"];

				  		if($conference2 == NULL OR $date2 == NULL OR $start2 == NULL OR $end2 == NULL OR $venue2 == NULL OR $room2 ==  NULL OR $description2 == NULL)
				  		{
				  			//echo "<span style ='color:red'>empty value!</span>";
				  		}
				  		elseif($conference2 == $conference1 AND $date2 == $date1 AND $start2 == $start1 AND $end2 == $end1 AND $venue2 == $venue1 AND $room2 == $room1 )
				  		{
				  			echo "<span style='color:red'>updating error!</span>";
				  		}
				  		else
				  		{

			  				$sql1 ="UPDATE conferences 
			  		        SET conferences.conferencename = '$conference2',
			  		            conferences.date = '$date2',
			  		            conferences.starttime = '$start2',
			  		            conferences.endtime = '$end2',
			  		            conferences.venue = '$venue2',
			  		            conferences.conferenceroom = '$room2',
			  		            conferences.description ='$description2',
			  		            conferences.status = NULL  
			  		        WHERE conferences.con_id='$selected_id' ";

					  		$result1 = $conn->query($sql1);
					  	 
					  		echo "<script>window.location.href = 'http:/conference/users/myconferences.php';</script>";


						}



				  	}


                }
               
              		  		
		}	  	
			  	//echo "</form>";
			  	//echo "</div>";	  		  	

	    
	  }
	  if (isset($_POST[$Delete_btn])) {
	  	$selected_id = $conferences_id[$i];

	    $sql = "DELETE FROM conferences
	            WHERE conferences.con_id ='$selected_id'";
	    $conn->query($sql);
	    
	    if ($conn->query($sql) === FALSE) 
	    {
	      echo "not deleted";
	    }
	    echo "<script>window.location.href = 'http:/conference/users/myconferences.php';</script>";
	    //echo "reject=".$selected_id;

	  }
	  if(isset($_POST[$Check_btn]))
	  {
	  	$selected_id = $conferences_id[$i];

	  	$sql ="SELECT conferences.* FROM conferences WHERE conferences.con_id='$selected_id'";

	  	$result = $conn->query($sql);

	  	if($result->num_rows >0)
	  	{
	  		while($row = $result->fetch_assoc())
	  		{
	  			$con_id = $row['con_id'];
	  			$manager = $row['username'];
	  			$_SESSION['con_id'] = $con_id;
	  			//$_SESSION['username'] = $manager;

	  			//echo "manager: ".$manager;
	  		}
	  	}

	  echo "<script>window.location.href ='http:/conference/users/papers_1.php';</script>";

	  }
	}
?>
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