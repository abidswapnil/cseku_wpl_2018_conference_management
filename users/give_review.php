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
      padding: 12px;


    }

    table, td
    {
          
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 135px;
	    padding-left: 20px;
	    text-align: center;
	    width: 100%;
	    background: #e1e5ea;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;  border: 1px solid grey;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 30px;
	    padding-left:  5px;
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
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 98%;
	    transform: translate(0%,-90%);
    }
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: green;
	    text-align: center;
	    border:1px solid #5daf3f;
	    width: 98%;
	    transform: translate(0%,-90%);

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
	.requirements
	{
		padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 900px;
	    width: 98%;
	    text-align: center;
	    transform: translate(0%,0%);

	}
	.requirements input[type = 'number']
	{
		width: 70%;
	    height: 50px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;
	}
	.requirements input[type = 'email']
	{
		width: 70%;
	    height: 50px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;
	}
	.requirements input[type = 'submit']
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
	.requirements textarea
	{
		width: 70%;
	    height: 200px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;

	}

</style>
<head>
	<title>current conferences</title>
	<h1>Paper's requirements</h1>

	<ul>
		  <li><a class="active" href="http:/conference/users/homepage.php">Home</a></li>
		  <li><a href="#home">Anouncement</a></li>
		  <li><a href="http:/conference/uploads/currentconferences.php">Current Conferences</a></li>
		  <li><a href="http:/conference/users/myconferences.php">My Conferences</a></li>
		  <li><a href="http:/conference/users/my_submission.php">My submission</a></li>
		  <li><a href="http:/conference/users/notifications.php">Notifications</a></li>
		  <li><a href="http:/conference/users/review_request.php">review request</a></li>	
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
	</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
	
		

<div class="requirements">
	<?php

	$user = $_SESSION['username'];
            
   $rev_id = $_SESSION['rev_id'];
   $papers = $_SESSION['papers'];
   $sub_date = $_SESSION['submission_date'];
   $sub_by = $_SESSION['submitted_by'];
   $conference = $_SESSION['conferencename'];
   $reviewer = $_SESSION['username'];
   $email = $_SESSION['email'];
   $assigned_by = $_SESSION['assigned_by'];
   $con_id = $_SESSION['con_id'];
   $papers_id = $_SESSION['papers_id'];
   $review_status = $_SESSION['review_status'];
   //$reviewer = $_SESSION['username'];


	    if(isset($_POST['review']))
        {
		   	  if(isset($_POST['number'],$_POST['comment']))
		  	  {
			  		$number = $_POST['number'];
			  		$comment = $_POST['comment'];

			  		if($number == NULL OR $comment == NULL )
			  		{
		  				echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "fill up all empty boxes";

						echo "</div>";
			  		}
			  		 else
				  	 {
				  	  
				  	  	 $sql = "UPDATE reviewer
				  	  	         SET reviewer.review='$number',
				  	  	             reviewer.comment= '$comment',
				  	  	             reviewer.review_status='1'
				  	  	       WHERE reviewer.username= '$reviewer'";

				  	  	 $sql1 = "UPDATE papers
				  	  	          SET papers.review = '$number',
				  	  	              papers.comment ='$comment',
				  	  	              papers.reviewed_by ='$reviewer'
				  	  	        WHERE papers.papers_id='$papers_id'";

				  	  	 if($conn->query($sql) == TRUE AND $conn->query($sql1) == TRUE)
				  	  	 {
				  	  	 	echo "<div class ='success'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "<span style='color:green'>review Submitted</span>";

							echo "</div>";
				  	  	 }
				  	  	 else
				  	  	 {
				  	  	 	echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "<span style='color:red'>*something wrong</span>";

							echo "</div>";

				  	  	 }              
				  	 } 

		  	  }

	   }  



	?>
	<h2>Review form<hr></h2>


    <p style="font-size: 20px; text-align: center;">Review this paper (<?php echo "<a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a>"; ?>) . Please give this paper a rating and describe how you consider this paper to be selected for the conference. Your opinion will help us. </p>

    <?php


    echo "<table><tr><th>Paper</th><th>Submission Date</th><th>Submitted By</th><th>conference</th><th>Assigned By</th></tr>";
		echo "<tr><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$sub_date. "</td><td>".$sub_by."</td><td>".$conference."</td><td>".$assigned_by."</td></tr></table>"; ?><br><hr> <br>

    <input type="number" name="number" min="0"  max="5" placeholder="give this paper a number between 0 to 5"><br><br><br><br>
    <textarea name="comment" placeholder="write your comments within 500 words..."></textarea><br><br>
    <input type="submit" name="review" value="review">

 

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