<?php 
require 'config.php';
session_start();
$sql = "SELECT admin.* FROM admin";
$result = $conn->query($sql);
if($result->num_rows >0)
{
	while($row = $result->fetch_assoc())
	{
		$admin = $row["username"];
		$email = $row['email'];
		$password =$row["password"];
	}
}


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin</title>
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
	.change
	{
		padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 380px;
	    width: 340px;
	    transform: translate(30%,24%);
	    text-align: center;
	}
	.change input[type='password']
    {
    	width: 50%;
    	border-width: 1px;
    	box-sizing: border-box;
    	height: 35px;
    	text-align: center;
    	width: 80%;
    }
    .newadmin
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 380px;
	    width: 340px;
	    transform: translate(160%,-76%);
	    text-align: center;

    }
    .newadmin input[type='password'],
    .newadmin input[type='email']
    {
    	width: 50%;
    	border-width: 1px;
    	box-sizing: border-box;
    	height: 35px;
    	text-align: center;
    	width: 80%;
    }
    .alert
    {
        padding: 18px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 91%;
	    transform: translate(-1%,-800%);

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
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    transform: translate(0%,-750%);

    }
    .aboutus
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 380px;
	    width: 900px;
	    transform: translate(116%,-176%);
	    text-align: center;


    }
    .aboutus textarea
    {
    	width: 99%;
	    height: 200px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;

    }
    .aboutus input[type='submit']
    {
    	background-color: #4CAF50; /* Green */
	    border: none;
	    color: white;
	    padding: 20px 35px;
	    text-align: center;
	    text-decoration: none;
	    display: inline-block;
	    font-size: 16px;
	    margin: 4px 2px;
	    cursor: pointer;
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
  <li><a href="http:/conference/admin/current_conferences.php">Current Conferences</a></li>
  <li><a href="#contact">Assign Author</a></li>
  <li><a href="#contact">Publications</a></li>
  <li><a href="#contact">Approved papers</a></li>
  <li><a href="http:/conference/admin/news_settings.php">News</a></li>
  <li><a href="request.php">Requests</a></li>
  <li><a href="http:/conference/admin/settings.php">Settings</a></li>
  <li style="float:right"><a href="http:/conference/admin/question_outside_admin.php">Anonymus Questions</a></li>
  <li style="float:right"><a href="http:/conference/admin/question.php">User Questions</a></li>
  <li style="float:right"><a href="http:/conference/admin/complain.php">Complain</a></li>



</ul>

<div class="change">
	<h2 style="text-align: center;">Change your password<hr></h2>
	<p>please type your old password first.</p>
	<input type="password" name="old" placeholder="current password"><br><br>
	<a href="http:/conference/admin/recover_pass_ad.php">Forgotten password?</a>
	<p>Now creat new password here .</p>
	<input type="password" name="new" placeholder="new password"><br><br>
	<input type="password" name="renew" placeholder="re-type password"><br><br>
	<input style="background-color: #4CAF50; border: none; padding: 10px 27px; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; cursor: pointer;" type="submit" name="submit" value="update">

<?php 

   if(isset($_POST['old'],$_POST['new'],$_POST['renew']))
   {
   	  $old = $_POST["old"];
   	  $new = $_POST["new"];
   	  $renew = $_POST["renew"];

   	  if($old == NULL OR $new == NULL OR $renew == NULL)
   	  {
   	  	 if($old == NULL)
   	  	 {
   	  	 	echo "<div class ='alert'>";

			echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
			echo "<span style='color:red'>type your old password!<span>";

			echo "</div>";

   	  	 }
   	  	 elseif($new == NULL)
   	  	 {
   	  	 	echo "<div class ='alert'>";

			echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
			echo "<span style='color:red'>creat a new password!<span>";

			echo "</div>";

   	  	 }
   	  	 elseif($renew == NULL)
   	  	 {
   	  	 	echo "<div class ='alert'>";

			echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
			echo "<span style='color:red'>confirm your password!<span>";

			echo "</div>";

   	  	 }
   	  }
   	  else
   	  {
   	  	 $sql ="SELECT admin.password FROM admin";

   	  	 $result = $conn->query($sql);

   	  	 if($result ->num_rows >0)
   	  	 {
   	  	 	while($row = $result ->fetch_assoc())
   	  	 	{
   	  	 		$password = $row["password"];
   	  	 	}
   	  	 	if($old != $password)
   	  	 	{
   	  	 		echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "<span style='color:red'>type your old password correctly!<span>";

				echo "</div>";

   	  	 	}
   	  	 	else
   	  	 	{
   	  	 		if($new != $renew)
   	  	 		{
   	  	 			echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "<span style='color:red'>confirm password missmatched<span>";

					echo "</div>";

   	  	 		}
   	  	 		else
   	  	 		{
   	  	 			$sql = "UPDATE admin
		   	  		        SET admin.password ='$new'";

			   	  		if($conn->query($sql) == TRUE)
			   	  		{
			   	  			echo "<div class ='success'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "<span style='color:green'>password changed!</span>";

							echo "</div>";

			   	  	    }

   	  	 		}
   	  	 	}

   	  	 }
   	  	 else
   	  	 {
   	  	 	echo "<div class ='alert'>";

			echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
			echo "<span style='color:red'>type your old password correctly!<span>";

			echo "</div>";

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

</div>

	</form>
	<form method="POST" action="">
	<div class="newadmin">
	<h2 style="text-align: center;">Make new admin<hr></h2>
	<p style="text-align: left;">Hey <?php echo "".$admin.","; ?><br>type your password to make a new admin.</p>
	<input type="password" name="old" placeholder="password"><br><br>
	<a href="http:/conference/admin/recover_pass_ad.php">Forgotten password?</a>
	<p>Enter a email of an user you want to make admin</p>
	<input type="email" name="email" placeholder="new admin's email"><br><br>
	<a href="http:/conference/admin/users.php">Want to choise?</a><br><br>
	<input style="background-color: #4CAF50; border: none; padding: 10px 27px; text-decoration: none; display: inline-block; font-size: 20px; margin: 4px 2px; cursor: pointer;" type="submit" name="submit" value="make">

	<?php

	if(isset($_POST['old'],$_POST['email']))
	{
		$old = $_POST['old'];
		$email = $_POST['email'];

		if($old == NULL OR $email == NULL)
		{
			if($old == NULL)
			{
				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "<span style='color:red'>password NULL<span>";

				echo "</div>";

			}
			elseif($email == NULL)
			{
				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "<span style='color:red'>email NULL<span>";

				echo "</div>";

			}
		}
		else
		{
			if($old != $password)
			{
				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "<span style='color:red'>type your old password correctly!<span>";

				echo "</div>";
			}
			else
			{
				$sql ="SELECT user.email FROM user WHERE user.email = '$email'";

				$result = $conn->query($sql);

				if($result ->num_rows > 0)
				{
					while($row = $result->fetch_assoc())
					{
						$email1 = $row['email'];
					}
					if($email != $email1)
					{
						echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "<span style='color:red'>email not found!<span>";

						echo "</div>";

					}
					else
					{
						$sql1 = "SELECT username,password FROM user WHERE user.email ='$email'";

						$result1 = $conn->query($sql1);

						if($result1->num_rows >0)
						{
							while($row = $result1->fetch_assoc())
							{
								$username = $row["username"];
								$password = $row["password"];
							}
							$sql2 ="UPDATE admin
							        SET admin.username='$username',
							            admin.password = '$password',
							            admin.email = '$email',
							            admin.code ='0'";
							            
							if($conn->query($sql2) == TRUE)
							{
								$sql = "SELECT user.* FROM user WHERE user.email = '$email'";

								$result = $conn->query($sql);

								if($result ->num_rows >0)
								{
									while($row = $result->fetch_assoc())
									{
										$fname = $row['firstname'];
										$lname = $row['lastname'];
										$uname = $row['username'];
										$email = $row['email'];
										$password = $row['password'];

										$_SESSION['firstname'] = $fname;
										$_SESSION['lastname'] = $lname;
										$_SESSION['username'] = $uname;
										$_SESSION['email'] = $email;
										$_SESSION['password'] = $password;
									}
									$sql = "INSERT INTO olduser (firstname,lastname,username,email,password) VALUES ('$fname','$lname','$uname','$email','$password')";
									if($conn->query($sql) == TRUE)
									{
										$sql3 ="DELETE FROM user WHERE user.username ='$username'AND user.email ='$email'";
							            $sql4 ="DELETE FROM member WHERE member.username='$username' AND member.email='$email'";

							            if($conn->query($sql3) == TRUE AND $conn->query($sql4) == TRUE)
							            {
							            	echo "<div class ='success'>";

											echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
											echo "<span style='color:green'>Admin changed<span>";

											echo "</div>";

							            }
							            else
										{
											echo "<div class ='alert'>";

											echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
											echo "<span style='color:red'>admin not changed!!<span>";

											echo "</div>";

										}  

									}
								}
								

							}
							          
						}
						else
						{
							echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "<span style='color:red'>something wrong!<span>";

							echo "</div>";

						}
					}

				}
				else
				{
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "<span style='color:red'>admin must have to be a user<span>";

					echo "</div>";

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

</div>

	</form>
	<form action="" method="POST">
		<div class="aboutus">
			<h2 style="text-align: center;">Set About us on signup page<hr></h2>
			<p style="text-align: left;">Set about your website, what you want to be shown in 'about Us'.

		    <?php

				if(isset($_POST['aboutus']))
				{
					$about_us = $_POST['aboutus'];

                    $sql = "UPDATE about_us
                            SET about_us.about_us='$about_us'";

                    if($conn->query($sql) == TRUE)
                    {
                    	echo "<span style='color:green;'>*set</span>";

                    }
                    else
                    {
                    	echo "<span style='color:red;'>*error</span>";

                    }        
					
				}

		    ?>

			</p>
		    
			<textarea name="aboutus" rows ="10" cols = "25" placeholder="set" required=""></textarea><br><br>	
			<input type="submit" name="set" value="set about us">

			

		</div>
		




	</form>

</body>
</html>