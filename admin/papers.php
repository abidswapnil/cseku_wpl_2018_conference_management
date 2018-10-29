<?php
session_start();
 require 'config.php';

 


?>

<!DOCTYPE html>
<html>
<style type="text/css">
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
	    padding-left: 250px;
	    text-align: left;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid black;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 80px;
	    padding-left: 250px;
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

</style>
<head>
	<title>current conferences</title>
	<h1>ADMIN</h1>

	<ul>
		  <li><a class="active" href="home.php">Home</a></li>
		  <li><a href="users.php">Users</a></li>
		  <li><a href="member.php">Members</a></li>
		  <li><a href="http:/conference/admin/current_conferences.php">Current Conferences</a></li>
		  <li><a href="#contact">Assign Author</a></li>
		  <li><a href="#contact">Publications</a></li>
		  <li><a href="#contact">Approved papers</a></li>
		  <li><a href="http:/conference/admin/news_settings.php">News</a></li>
		  <li><a href="request.php">Conference requests</a></li>
		  <li><a href="request.php">Paper requests</a></li>
		  <li><a href="http:/conference/admin/settings.php">Settings</a></li>
		  <li style="float:right"><a href="http:/conference/admin/question_outside_admin.php">Anonymus Questions</a></li>
         <li style="float:right"><a href="http:/conference/admin/question.php">User Questions</a></li>
		 <li style="float:right"><a href="http:/conference/admin/complain.php">Complain</a></li>
		</ul><br><br>
</head>
<body>
	<form method="POST" action="">
		
<?php
         

			$num_reviewers = 0;
			$conferences_id = array();
			$string = "";
			


			$sql ="SELECT * FROM papers "; 

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;
				

				echo "<table><tr><th>ID</th><th>papers</th></th><th>Submission Date</th></th><th>Submitted By</th></th><th>Conference</th></tr>";

				while($row = $result->fetch_assoc())
				{
					$i++;
					

                    $papers_id[$i] = $row['papers_id'];
					$papers = $row['papers'];
					$submission_date = $row['submission_date'];
					$username = $row['submitted_by'];
					$conference= $row['conferencename'];
					//$papers = $row['papers'];
					

			echo "<tr><td>".$papers_id[$i]."</td><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>" . $submission_date. "</td><td>" . $username. "</td><td>" . $conference. "</td></tr>";
							
						
					
					
				}
				echo "</table>";

				$num_reviewers = $i;
                

				
			}
			else
            {
            	echo "<div class ='zero'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "papers not found!";

				echo "</div>";
            }
            for($i = 1; $i <= $num_reviewers; $i++)
            {
            	$assign_btn = 'assign'.$i;

            	if(isset($_POST[$assign_btn]))
            	{
            		$selected_id = $papers_id[$i];

            		$sql="SELECT papers.* FROM papers WHERE papers.papers_id='$selected_id' ";

            		$result = $conn->query($sql);

            		if($result->num_rows > 0)
            		{
            			while($row = $result ->fetch_assoc())
            			{
            				$id = $row['papers_id'];
            				$papers =$row['papers'];
            				$sub_date = $row['submission_date'];
            				$sub_by = $row['submitted_by'];
            				$conference =$row['conferencename'];

            				$_SESSION['papers_id'] = $id;
            				$_SESSION['papers'] = $papers;
            				$_SESSION['submission_date']= $sub_date;
            				$_SESSION['submitted_by'] = $sub_by;
            				$_SESSION['conferencename'] = $conference;




            			}
            			$sql = "INSERT INTO reviewer (papers,submission_date,submitted_by,conferencename) VALUES ('$papers','$submission_date','$username','$conference')";

            			if($conn->query($sql)== TRUE)
            			{

            				 echo "<script>window.location.href = 'http:/conference/admin/assign_reviewer.php';</script>";
            			}
            			
            		}
            		
            		
            		//echo "";
            		//header('location:http/conference/admin/assign_reviewer.php');


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