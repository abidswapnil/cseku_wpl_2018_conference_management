<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<body>
	<style>
		body
		{
			background:#abd3d1; 


		}
		header
		{
			height: 200px;
			background:#e0bd9c;
			border: 1px solid grey;

			
		}
		h1
		{
			color:#444048;


		}
		h2
		{
			color: #114072;
			text-align: center;
		}
		button 
		{
		    background-color: #4CAF50;
		    color: white;
		    padding: 5px 25px;
		    border: none;
		    cursor: pointer;
		    width: 5%;
		    opacity: 0.9;
		    transform: translate(1590%,-75%);

       }
       footer
       {
       	 height:100px;
       	 background:#696b6d;
       	 transform: translate(0%,750%);
       }
       input[type = text],
       input[type= password]
       {
       	  transform: translate(587%,-165%);
      	  border-width: 2px;
       	  height: 25px;
       }
       .alert
       {
	        padding: 20px;
		    background-color:rgb(0.1,0.3,0.5,0.2);
		    color: red;
		    text-align: center;
		    border:1px solid red;
		    transform: translate(0%,0%);
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
       table 
	   {
          border-collapse: collapse;
          padding: 8px;

        }
        table, td
        {
	        
	        padding-top: 12px;
		    padding-bottom: 12px;
		    padding-right: 50px;
		    padding-left: 50px;
		    text-align: left;
		    width: 60%;
        }
        tr:hover {background-color: #f3ff8c;}
	    tr:nth-child(even){background-color: #f2f2f2;}
	    th
	    {
	    	background-color: #42c2f4;
	    	border: 1px solid black;
	        padding-top: 12px;
		    padding-bottom: 12px;
		    padding-right: 20px;
		    padding-left: 0px;
		    text-align: center;
		    
	    }
	    .conference
	    {
	    	width: 100%;		
	    }
	    .current
	    {
	    	text-align: left;
	    	padding-top: 3%;
	    }
	    .forget
	    {
	    	font-size: 20px;
	    	transform: translate(77%,-465%);
	    }
	    .question
	    {
	    	padding: 20px;
	    	padding-top: 70px;
	    	padding-bottom: 50px;
		    background-color:#bae2e2;
		    height: 530px;
		    width: 710px;
		    text-align: center;
		    transform: translate(175%,-55%);
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
		.success
		{
			padding: 20px;
		    background-color:rgb(0.1,0.3,0.5,0.2);
		    color: green;
		    text-align: center;
		    border:1px solid #5daf3f;
		    width: 94%;
		    transform: translate(0%,-90%);

		}
		.register
		{
			background: #75b2b2;
			height: 50px;
		}
		.register table 
	    {
          border-collapse: collapse;
          padding: 8px;

        }
        .register table, td
        {
	        
	        padding-top: 12px;
		    padding-bottom: 12px;
		    padding-right: 50px;
		    padding-left: 50px;
		    text-align: left;
		    width: 10%;
        }
		    



	</style>
	<form action="" method="POST">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1>
			
			<input type="text" name="username" placeholder="username" required=""><br><br>
			<input type="password" name="password" placeholder="password" required=""><br><br>

			<button>sign in</button>
			<div class="forget"><a href="http:/conference/login/recover_pass.php">Forgotten password?</a></div>
			<div class=""><a href="http:/conference/login/signup.php">registration</a></div>
			<?php
			
			 
			 require 'config.php';

			  
			 if(isset($_POST['username'],$_POST['password']))
			 {
			 	$uname = $_POST["username"];
			 	$pass = $_POST["password"];

			 	if($uname == NULL OR $pass == NULL)
			 	{
			 		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "<span style='color:red'>username or password empty!<span>";

					echo "</div>";
			 	}
			 	else
			 	{
			 		$sql = "SELECT username,email,password FROM user WHERE username = '$uname' AND password = '$pass' ";

				 	$result = $conn->query($sql);

				 	if($result ->num_rows >0)
				 	{
				 		while($row = $result->fetch_assoc())
				 		{
				 			$uname1= $row["username"];
				 			$email1 = $row["email"];
				 			$pass1 = $row["password"];
				 		}
				 		$_SESSION['email'] = $email1;
				 		if($uname1 == $uname AND $pass1 == $pass)
				 		{
				 			$sql ="SELECT member.username ,member.email FROM member WHERE member.username ='$uname' AND member.email ='$email1'";

				 			$result = $conn->query($sql);

				 			if($result->num_rows >0)
				 			{
				 				$_SESSION['username'] = $_POST['username'];

				 				echo "<script>window.location.href='http:/conference/users/homepage.php';</script";
				 				
				 			}
				 			else
				 			{
				 				$sql1 ="INSERT INTO member(username,email) VALUES ('$uname','$email1')";

					 			if($conn->query($sql1) == TRUE)
					 			{
					 				
					 				$_SESSION['username'] = $_POST['username'];

					 				echo "<script>window.location.href ='http:/conference/users/homepage.php';</script>";

					 			}
				 			}
				 			/*else
				 			{
				 				echo "<div class ='alert'>";

								echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
								echo "<span style='color:red'>something wrong!<span>";

								echo "</div>";
				 			}*/
				 		}

				 	}
				 	else
			 		{
			 			$sql2 = "SELECT username,password FROM admin";

			 			$result2 = $conn ->query($sql2);

			 			if($result2 ->num_rows >0)
			 			{
			 				while($row = $result2->fetch_assoc())
			 				{
			 					$uname2 = $row["username"];
			 					$pass2 = $row["password"];
			 					//$email2 = $row["email"];
			 					
			 				}
			 				if($uname2 == $uname AND $pass2 == $pass)
			 				{
			 					$_SESSION['username'] = $_POST['username'];
			 					
			 					echo "<script>window.location.href='http:/conference/admin/home.php';</script";
			 				}
			 				else
			 				{
			 					echo "<div class ='alert'>";

								echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
								echo "<span style='color:red'>Wrong username or password!<span>";

								echo "</div>";


			 				}
			 			}			 			
	 					$sql ="SELECT olduser.* FROM olduser WHERE olduser.username = '$uname' AND olduser.password = '$pass'";

	 					$result = $conn->query($sql);

	 					if($result->num_rows >0)
	 					{
	 						while($row = $result->fetch_assoc())
	 						{
	 							$fname3 = $row['firstname'];
	 							$lname3 = $row['lastname'];
	 							$uname3 = $row['username'];
	 							$email3 = $row['email'];
	 							$pass3 = $row['password'];
	 						}
	 						if($uname3 == $uname AND $pass3 == $pass)
	 						{
	 							$sql ="INSERT INTO user (firstname,lastname,username,email,password) VALUES ('$fname3','$lname3','$uname3','$email3','$pass3')";

	 							$sql1 = "INSERT INTO member (username,email) VALUES ('$uname3','$email3')";

	 							if($conn ->query($sql) == TRUE AND $conn ->query($sql1) == TRUE)
	 							{
	 								echo "<script>window.location.href='http:/conference/users/homepage.php'</script>";

	 							}
	 						}
	 						else
	 						{
	 							echo "<div class ='alert'>";

								echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
								echo "<span style='color:red'>Wrong username or password!<span>";

								echo "</div>";

	 						}
	 						
	 					}
			 		}
				 	/*else
				 	{
				 		echo "<span style ='color:red'>You have entered a wrong username or password!</span>";
				 	}*/

			 	}

			 	
			 }




			?>


				
		</header><hr>


		<?php 

		echo "<div class='description'>";

        echo "</div>";

        echo "<div class ='conference'>";

			$sql ="SELECT * FROM conferences WHERE status= '1'"; 

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				echo "<div class='current'><h1><span style='color:#2f7200'>Current conferences</span></h1></div>";

				echo "<table><tr><th>Name</th><th>Date</th></th><th>Start</th></th><th>End</th></th><th>Venue</th></th><th>Room</th></th></tr>";

				while($row = $result->fetch_assoc())
				{
					#$papers = $_SESSION['papers'];
					
					

                    //$conferences_id[$i] = $row['con_id'];
					$conference = $row['conferencename'];
					$date = $row['date'];
					$start = $row['starttime'];
					$end = $row['endtime'];
					$venue = $row['venue'];
					$room = $row['conferenceroom'];
					$description = $row['description'];
					//$papers = $row['papers'];

					echo "<tr><td>".$conference."</td><td>".$date."</td><td>".$start. "</td><td>".$end."</td><td>".$venue."</td><td>".$room."</td></tr>";

							
																														
				}
				echo "</table>";
                

				
			}

            echo "</div>";		




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
<?php




?>