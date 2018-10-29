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
	    padding-right: 105px;
	    padding-left: 52px;
	    text-align: center;
	    width: 100%;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 20px;
	    padding-left:  20px;
	    text-align: center;
	    
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
    .aware
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 98%;
	   
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
   .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    width: 98%;

    }

</style>
<head>
	<title>notifications</title>
	<h1 style="font-size: 30px;">Review requests</h1>

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
			//$not_id = array();
			$string = "";
			$username = $_SESSION['username'];
			

			$sql = "SELECT * FROM reviewer WHERE reviewer.username = '$username' ";

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;


				echo "<table><tr><th>papers</th><th>Submission Date</th></th><th>Submitted By</th></th><th>conference</th></th><th>press review</th></tr>";

				while($row = $result->fetch_assoc())
				{
					$i++;
					

                    $rev_id[$i] = $row['rev_id'];
					$papers = $row['papers'];
					$sub_date = $row['submission_date'];
					$sub_by = $row['submitted_by'];
					$conference = $row['conferencename'];
					$reviewer = $row['username'];
					$review_status = $row['review_status'];
					

	                if($username == $reviewer)
	                {
	                	if($review_status==1)
	                	{
	                		echo "<tr><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>" . $sub_date. "</td><td>" . $sub_by. "</td><td>" . $conference. "</td><td><span style='color:green;'>*reviewed</span></td></tr>";

	                	}
	                	else
	                	{
	                		echo "<tr><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>" . $sub_date. "</td><td>" . $sub_by. "</td><td>" . $conference. "</td><td><input type='submit' name='review".$i."'style='height:30px; width:100px; padding:2px; margin:0px; background-color:#efef86;' value='review'></td></tr>";

	                	}

	                }
                  
              	

								
					
				}

				echo "</table>";
				

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
	  
	  $review_btn = 'review'.$i;

	  	

		  if (isset($_POST[$review_btn])) 
		  {
		  	    $selected_id = $rev_id[$i];
		  	   
		  	   $sql = "SELECT reviewer.* FROM reviewer WHERE reviewer.rev_id='$selected_id'";

		  	   $result = $conn->query($sql);

		  	   if($result->num_rows >0)
		  	   {
		  	   	  while($row = $result->fetch_assoc())
		  	   	  {
			  	   	  	$rev_id = $row['rev_id'];
						$papers = $row['papers'];
						$sub_date = $row['submission_date'];
						$sub_by = $row['submitted_by'];
						$conference = $row['conferencename'];
						$reviewer = $row['username'];
						$email = $row['email'];
						$assigned_by = $row['assigned_by'];
						$con_id = $row['con_id'];
						$papers_id = $row['papers_id'];
						$review_status = $row['review_status'];

						$_SESSION['rev_id'] = $rev_id;
						$_SESSION['papers'] = $papers;
						$_SESSION['submission_date'] = $sub_date;
						$_SESSION['submitted_by'] = $sub_by;
						$_SESSION['conferencename'] = $conference;
						$_SESSION['username'] = $reviewer;
						$_SESSION['email'] = $email;
						$_SESSION['assigned_by'] = $assigned_by;
						$_SESSION['con_id'] = $con_id;
						$_SESSION['papers_id'] = $papers_id;
						$_SESSION['review_status'] = $review_status;


						echo "<script>window.location.href = 'http:/conference/users/give_review.php';</script>";

		  	   	  }

		  	   }

			    
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