<?php
 session_start();

 require 'config.php';
 ?>
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

    table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table, td
    {
        
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 50px;
	    padding-left: 60px;
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
	    padding-right: 30px;
	    padding-left:  25px;
	    text-align: center;
	    width: 100%;
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
	.choose
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
	    background-color: #f44336;
	    color: white;
	    text-align: center;
	    /*transform: translate(0%,-1235%);*/
    }
    .success
    {
    	padding: 20px;
	    background-color: #5daf3f;
	    color: white;
	    text-align: center;
	    /*transform: translate(0%,-1445%);*/

    }
    .zero
    {
    	padding: 20px;
	    background-color: lightblue;
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
	.button
	{
	    
	    color: black; 
	    border: 1px solid #008CBA;
    }

	.button:hover
	 {
	    background-color: #008CBA;
	    color: white;
	 }
	 input[type=text],
	 input[type = email]
	 {
	 	padding: 8px;
	 	
	 }


</style>
<head>
	<title>current conferences</title>
	<h1 style="text-align: center; font-size: 30px;">Current conferences</h1>

	<ul>
		  <li><a class="active" href="http:/conference/users/homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="currentconferences.php">Current Conferences</a></li>
		  <li><a href="http:/conference/users/myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="http:/conference/users/notifications.php">Notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>	
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
	</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="currentconferences.php" enctype="multipart/form-data">
		
<?php
            

			$num_conferences = 0;
			$conferences_id = array();
			$string = "";
			$username = $_SESSION['username'];
			


			$sql ="SELECT * FROM conferences WHERE status= '1'"; 

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;

				echo "<table><tr><th>Name</th><th>Date</th></th><th>Start</th></th><th>End</th></th><th>Venue</th></th><th>Room</th></th><th>Submit</th></tr>";

				while($row = $result->fetch_assoc())
				{
					#$papers = $_SESSION['papers'];
					$i++;
					

                    $conferences_id[$i] = $row['con_id'];
					$conference = $row['conferencename'];
					$date = $row['date'];
					$start = $row['starttime'];
					$end = $row['endtime'];
					$venue = $row['venue'];
					$room = $row['conferenceroom'];
					$description = $row['description'];
					//$papers = $row['papers'];	

					echo "<tr><td><a href='http:/conference/users/papers.php'>".$conference."</a></td><td>".$date."</td><td>".$start. "</td><td>".$end."</td><td>".$venue."</td><td>".$room."</td><td><input style='height:40px;'class='button' type='submit' name='submit".$i."'value='go and submit your paper'></td></tr>";
							
																														
				}
				echo "</table>";
                $num_conferences = $i;

				
			}
			else
            {
            	echo "<div class ='zero'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "No conferences";

				echo "</div>";
            }
	for($i = 1; $i <= $num_conferences; $i++)
	{
	  //echo "id:"." ".$id[$i]." ";
	  //$Edit_btn = 'Edit'.$i;

	  	
	  $Submit_btn = 'submit'.$i;
	  $file= 'file'.$i;
	  



	  if (isset($_POST[$Submit_btn])) 
	  {
	  	$selected_id = $conferences_id[$i];

	  	$sql = "SELECT conferences.* FROM conferences WHERE conferences.con_id = '$selected_id'";

	  	$result = $conn->query($sql);

	  	if($result ->num_rows >0)
	  	{
	  		while($row = $result->fetch_assoc())
	  		{
	  			$con_id = $row['con_id'];
	  			$conference = $row['conferencename'];
	  			$date = $row['date'];
	  			$start = $row['starttime'];
	  			$end = $row['endtime'];
	  			$venue = $row['venue'];
	  			$room = $row['conferenceroom'];
	  			$description = $row['description'];
	  			//$created_by = $row['username'];


	  			$_SESSION['con_id'] = $con_id;
	  			$_SESSION['conferencename'] = $conference;
	  			$_SESSION['date'] = $date;
	  			$_SESSION['starttime'] = $start;
	  			$_SESSION['endtime'] = $end;
	  			$_SESSION['venue'] = $venue;
	  			$_SESSION['conferenceroom'] = $room;
	  			$_SESSION['description'] =$description;
	  			//$_SESSION['username'] = $created_by;
	  		}
	  	}
	  	echo "<script>window.location.href = 'http:/conference/uploads/papers_requirements.php';</script>";


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