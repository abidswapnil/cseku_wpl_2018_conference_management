<?php 
require 'config.php';
 session_start();

 $conference = $_SESSION['conferencename'];
 


?>
<!DOCTYPE html>
<html>
<head>
	<title>admin | assign-new-manager</title>
</head>
<body>
	<style>
		body
		{
			background:#8fc1b7;


		}
		header
		{
			height: 200px;
			background:#939670;
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
		    transform: translate(1590%,-55%);

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
       	  transform: translate(987%,-125%);
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
		    width: 95%;
		    transform: translate(0%,-570%);

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
       .description
       {


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
		    width: 50%;
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
	    	transform: translate(78%,-340%);
	    }
	    .recover
	    {
	    	border: 1px solid #8e8e8e;
	    	padding: 20px;
	    	padding-top: 70px;
	    	padding-bottom: 50px;
		    background-color:white;
		    height: 300px;
		    width: 710px;
		    transform: translate(45%,14%);
	    }
	    .recover input[type='email']
	    {
	    	width: 50%;
	    	border-width: 1px;
	    	box-sizing: border-box;
	    	height: 35px;
	    	text-align: center;
	    }
	    .success
        {
	    	padding: 20px;
		    background-color:rgb(0.1,0.3,0.5,0.2);
		    color: red;
		    text-align: center;
		    border:1px solid #5daf3f;
		    transform: translate(0%,-565%);

        }
	</style>
	<form action="" method="POST">
		<header><h1 style="text-align: center; color: black;">ADMIN</h1>
		
		</header><hr>
		<div class="recover">
			<h1>Assign new manager for conference<hr></h1>
			<p style="font-size: 20px;">Please enter a valid email of a user , whom you want to assign as manager of the conference <?php echo " ".$conference; ?>.</p><br>
			<input type="email" name="email" placeholder="Enter your email address"><br><br>
			<input style="background-color: #4CAF50; border: none; padding: 15px 32px; transform: translate(0px,40px); width:100%;text-decoration: none; display: inline-block; font-size: 16px; margin: 4px 2px; cursor: pointer;" type="submit" name="submit">

		<?php

		  if(isset($_POST['email']))
		  {
		  	$email = $_POST['email'];
				if($email == NULL)
				{
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "<span style='color:red'>email empty!</span>";

					echo "</div>";
				}
				else
				{
					$sql = "SELECT member.* FROM member WHERE member.email ='$email'";

					$result = $conn->query($sql);

					if($result ->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							$email1 = $row['email'];
						}
						if($email1 == $email)
						{
							$sql = "SELECT member.username FROM member WHERE member.email = '$email'";

							$result = $conn->query($sql);

							if($result ->num_rows >0)
							{
								while($row = $result->fetch_assoc())
								{
									$username = $row['username']; 
								}
								$sql2 ="UPDATE conferences 
								        SET    conferences.username = '$username',
								               conferences.email ='$email'
								        WHERE  conferences.conferencename ='$conference'";

								if($conn->query($sql2) == TRUE)
								{
									echo "<div class ='success'>";

									echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
									echo "<span style='color:green'>Manager changed!</span>";

									echo "</div>";

								} 
								else
								{
									echo "<div class ='alert'>";

									echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
									echo "<span style='color:red'>manager not changed!</span>";

									echo "</div>";

								}       
							}

						}
						else
						{
							echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "<span style='color:red'>Enter a valid email</span>";

							echo "</div>";

						}
					}
					else
					{
						echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "<span style='color:red'>You only can choose manager from our members!</span>";

						echo "</div>";

					}
				
							


						
						
					}
				 
			}
		

			
		?>
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
		

		<footer></footer>

		

	</form>


	

</body>
</html>
<?php




?>