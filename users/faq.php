<?php 

session_start();
require 'config.php';

$username = $_SESSION['username'];
$email = $_SESSION['email'];

 ?>

<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1">
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
   .closebtn
   {
	    margin-left: 30px;
	    color: black
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
    .link
    {
    	text-align: left;
    }
	.question
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#bae2e2;
	    height: 450px;
	    width: 410px;
	    text-align: center;
	    transform: translate(5%,24%);
	    border: 1px solid white;
    }
    .answer
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#bae2e2;
	    height: 450px;
	    width:630px;
	    text-align: center;
	    transform: translate(90%,-76%);
	    border: 1px solid white;

    }
    .question textarea
	{
		width: 80%;
	    height: 100px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;

	}
	.question input[type ='email']
	{
		width: 80%;
	    height: 50px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;

	}
	.question input[type='submit']
	{
	    background-color: #69afaf; /* Green */
	    border: none;
	    color: white;
	    padding: 15px 32px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
	    width: 80%;

	}
    .alert
    {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 95%;
	    transform: translate(0%,-900%);

    }
   .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: green;
	    text-align: center;
	    border:1px solid #5daf3f;
	    width: 95%;
	    transform: translate(0%,-790%);

    }
    table, td
    {
        
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 20px;
	    padding-left: 15px;
	    text-align: left;
	    width: 100%;

    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 130px;
	    padding-left: 84px;
	    text-align: center;
    }


	</style>
</head>
<body>
	<h1>Frequently asked question</h1>
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
		<div class="question">
		 	<form action="" method="POST">

		 	
		 	<h2>Questions & Complain box<hr></h2>
		 	<p>Please ask your questions properly, so that we can help you. And compain us .</p>
		 	<textarea name="question" rows="5" cols="30" placeholder="your question" required=""></textarea><br><br>
		 	<textarea name="complain" rows="5" cols="30" placeholder="complain" required=""></textarea><br><br>
		 	<input type="submit" name="ask" value="ask">

		 	
            <?php


		 	    if(isset($_POST['question'],$_POST['complain']))
		 	    {
		 	    	$question = $_POST['question'];
		 	    	$complain = $_POST['complain'];

	 	    		$sql = "INSERT INTO questions (question,complain,email,asker) VALUES ('$question','$complain','$email','$username')";

		 	    	if($conn->query($sql) == TRUE)
		 	    	{
		 	    		echo "<div class ='success'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "sent";

						echo "</div>";
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
		 	

    </div>
    <div class="answer" style="overflow-y: scroll;">
       
       <form action="" method="POST">

    	<h2>Your answer<hr></h2>

    	<?php

    	$num_questions = 0;
    	$q_id = array();

    	$sql ="SELECT questions.* FROM questions WHERE questions.email='$email' AND questions.asker='$username'";

    	$result = $conn->query($sql);

    	if($result->num_rows >0)
    	{
    		$i =0;

    		echo "<table><tr><th>question</th><th>answer</th><th><span style='color:red'>delete?</span></th></tr>";
    		while($row = $result->fetch_assoc())
    		{
    			$i++;
                
                $id[$i] = $row['q_id'];
    			$question = $row['question'];
    			$answer = $row['answer'];
    			$asker = $row['asker'];
    			$email1 = $row['email'];

    			if($answer == NULL)
    			{
    				echo "<tr><td>".$question."</td><td><span style='color:red'>*pending</span></td><td><input type='submit' name='delete".$i."' value='delete' style='height:30px; width:100px; padding:2px; margin:0px; background-color:#e04c4c; transform:translate(80px,0px);'></td></tr>";

    			}
    			else
    			{
    				echo "<tr><td>".$question."</td><td>".$answer."</td><td><input type='submit' name='delete".$i."' value='delete' style='height:30px; width:100px; padding:2px; margin:0px; background-color:#e04c4c; transform:translate(80px,0px);'></td></tr>";

    			}


    		}
    		echo "</table>";

    		$num_questions = $i;
    	}
    	else
    	{
    		$num_questions1 = 0;
    	    $q_id = array();

    		$sql = "SELECT deleted_questions.* FROM deleted_questions WHERE deleted_questions.email = '$email' AND deleted_questions.asker='$username'";

    		$result = $conn->query($sql);

    		if($result->num_rows >0)
    		{
    			$i=0;
    			echo "<table><tr><th>question</th><th>answer</th><th><span style='color:red'>delete?</span></th></tr>";

    			while($row = $result->fetch_assoc())
    			{
    				$i++;
    				$id[$i] = $row['q_id'];
    				$question = $row['question'];
	    			$answer = $row['answer'];
	    			$asker = $row['asker'];
	    			$email1 = $row['email'];

	    			echo "<tr><td>".$question."</td><td>".$answer."</td><td><input type='submit' name='delete".$i."' value='delete' style='height:30px; width:100px; padding:2px; margin:0px; background-color:#e04c4c; transform:translate(80px,0px);'></td></tr>";


    			}
    			echo "</table>";

    			$num_questions1 =$i;

    		}
    		else
	    	{
	    		echo "<h2 style='text-align:center; color:red;'>No answer!</h2>";
	    	}

		    for($i=1; $i<=$num_questions1; $i++)
	    	{
	    		$delete_btn = 'delete'.$i;

	    		if(isset($_POST[$delete_btn]))
	    		{
	    			$selected_id = $id[$i];

	    			$sql= "DELETE FROM deleted_questions WHERE deleted_questions.q_id ='$selected_id'";

    		            if($conn->query($sql) == TRUE )
	    				{
	    					echo "<script>window.location.href ='http:/conference/users/faq.php';</script>";
	    				}
	    		}

	    			

	    	}
	    
    }
    	
    	for($i=1; $i<=$num_questions; $i++)
    	{
    		$delete_btn = 'delete'.$i;

    		if(isset($_POST[$delete_btn]))
    		{
    			$selected_id = $id[$i];

    			$sql= "DELETE FROM questions WHERE questions.q_id ='$selected_id'";

    			if($answer == NULL)
    			{
    				if($conn->query($sql) == TRUE)
	    			{
	    				echo "<script>window.location.href ='http:/conference/users/faq.php';</script>";
	    			}


    			}
    			else
    			{
    				$sql ="INSERT INTO deleted_questions (question,answer,asker,email,q_id) VALUES ('$question','$answer','$asker','$email1','$selected_id')";

    				$sql1 = "DELETE FROM questions WHERE questions.q_id ='$selected_id'";

    				if($conn->query($sql) == TRUE AND $conn->query($sql1) == TRUE)
    				{
    					echo "<script>window.location.href ='http:/conference/users/faq.php';</script>";
    				}
    			}

    			

    		}
    	}





    	 ?>

        </form>

    </div>


</body>
</html>