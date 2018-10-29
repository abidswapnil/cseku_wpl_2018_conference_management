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
	    padding-left: 50px;
	    text-align: left;
	    background-color: #f2f2f2;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;  border: 1px solid grey;}
    tr:nth-child(odd){background-color: #f2f2f2;  border: 1px solid grey;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid black;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 77px;
	    padding-left: 110px;
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
	div
	{
		padding-left: 15%;
	}
	.zero
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
	.hide
	{
		transform: translate(6%,0%);

	}
	.success 
	{
	    padding: 20px;
	    background-color: #f44336;
	    color: white;
	    text-align: center;
    }
    .hide
    {
    	padding-right: 20px;
    	transform: translate(-5%,0%);
    }

</style>
<head>
	<title>notifications</title>
	<h1>Notifications</h1>

	<ul>
		  <li><a class="active" href="homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="http:/conference/uploads/currentconferences.php">Current Conferences</a></li>
		  <li><a href="myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="http:/conference/users/notifications.php">Notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
		</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="">
		
<?php
            $num_notifications = 0;
			$not_id = array();
			$string = "";
			$username = $_SESSION['username'];
			

			$sql = "SELECT * FROM notifications WHERE notifications.username = '$username' ";

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;

				echo "<div class='hide'>";

				echo "<table>";

				while($row = $result->fetch_assoc())
				{
					$i++;
					

                    $not_id[$i] = $row['not_id'];
					$conference = $row['conferencename'];
					$date = $row['date'];
					$start = $row['starttime'];
					$end = $row['endtime'];
					$venue = $row['venue'];
					$room = $row['conferenceroom'];
					$description = $row['description'];
					$status = $row['status'];

					/*$string .= $conferences_id[$i].". ";
			        $string .= "name: ".$conference."; "." ";
			        $string .= "date: ".$date."; "." ";
			        $string .= "start :".$start."; "." ";
			        $string .= "end: ".$end."; "." ";
			        $string .= "venue: ".$venue."; "." ";
			        $string .= "room: ".$room."; "." ";
			        $string .= "description: ".$description." ";*/


			        //$string .= "<input type='submit' name ='Edit".$i."' style='height:30px; width:60px; padding:2px; margin:2px; background-color:green;' value ='Edit'></input>"." ";

                    //$string .= "<input type='submit' name ='Delete".$i."' style='height:30px; width:60px; padding:2px; margin:2px; background-color:red;' value ='Delete'></input>";

                    if($status == 1)
                    {
                    	echo "<tr><td>".$conference."</td><td>" . $date. "</td><td>" . $start. "</td><td>" . $end. "</td><td>" . $venue. "</td><td>" . $room. "</td><td>" . $description. "</td><td>"."<span style='color:green'>Approved</span>"."</td><td><input type='submit' name='X".$i."'style='height:30px; width:30px; padding:2px; margin:0px; background-color:red;' value='X'></td></tr>";
                    }
                    elseif($status == 0)
                    {
                    	echo "<tr><td>".$conference."</td><td>" . $date. "</td><td>" . $start. "</td><td>" . $end. "</td><td>" . $venue. "</td><td>" . $room. "</td><td>" . $description. "</td><td>"."<span style='color:red'>Discarded</span>"."</td><td><input type='submit' name='X".$i."' style='height:30px; width:30px; padding:2px; margin:0px; background-color:red;' value='X'></td></tr>";

                    }

								
					
				}

				echo "</table>";
				echo "</div>";				

				 $num_notifications = $i;

				
			}
			else
			{
				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "No notification";

				echo "</div>";
			}
	for($i = 1; $i <= $num_notifications; $i++)
	{
	  //echo "id:"." ".$id[$i]." "
	  $Delete_btn = 'X'.$i;

	  	//echo "<form action='' method='POST'>";

		  if (isset($_POST[$Delete_btn])) 
		  {
		  	    $selected_id = $not_id[$i];
		  	    			  	
			    $sql = "DELETE FROM notifications
			            WHERE notifications.not_id ='$selected_id'";
			    $conn->query($sql);
			    
			    if ($conn->query($sql) === FALSE) {
			      echo "not deleted";
			    }
			    if($conn ->query($sql) == TRUE)
			    {
			    	    echo "<script>window.location.href = 'http:/conference/users/notifications.php';</script>";
			    }
			    //echo "reject=".$selected_id;
			    //header("location: notifications.php");
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