<?php require 'config.php';

    session_start();

    $sql= "SELECT admin.* FROM admin";

    $result = $conn->query($sql);

    if($result ->num_rows > 0)
    {
    	while($row = $result ->fetch_assoc())
    	{
    		$admin = $row['username'];
    		$a_email = $row['email'];
    		$_SESSION['username'] = $admin;
    		$_SESSION['email'] = $a_email;
    	}
    }



  ?>
<!DOCTYPE html>
<html>
<head>
	<title>admin | chat</title>
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
	.chatbox
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 500px;
	    width: 530px;
	    text-align: center;
	    transform: translate(150%,21%);
    }
    .messege
    {
    	padding: 20px;
    	padding-top: 50px;
    	padding-bottom: 50px;
	    background-color:white;
	    height: 30px;
	    width: 510px;
	    text-align: center;
	    transform: translate(155.5%,0%);

    }
    .messege input[type='text']
    {
    	width: 70%;
    	border-width: 1px;
    	box-sizing: border-box;
    	height: 35px;
    	text-align: center;
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

		<div class="chatbox" style="overflow-y: scroll;">
			<h3 style="color: #3d3f3f;">Chat with user<hr></h3>
			<p></p>

			
			<?php 

			$sql = "SELECT MAX(text_id) FROM chat";
			$result = $conn->query($sql);
			if($result ->num_rows >0)
			{
				while($row = $result ->fetch_assoc())
				{
					$text_id = $row['text_id'];

				}
				

			}

			if(isset($_POST['submit']))
			{
				if(isset($_POST['text']))
				{
					$text = $_POST['text'];

					if($text == NULL)
					{
						

					}
					else
					{
						//echo "<p style='text-align:right;'>".$text."</p>";

						$sql ="UPDATE chat
						       SET chat.a_text ='$text',
						           chat.a_name='$admin',
						           chat.a_email='$a_email'
						     WHERE chat.text_id='$text_id'";

						     echo "".$text_id;

						if($conn->query($sql) == TRUE)
						{
							//echo "<p style='text-align:left;'>".$text."</p>";
							
						}
					}
				}
				
			}
			$sql ="SELECT chat.* FROM chat ";

			$result = $conn->query($sql);

		    if($result->num_rows >0)
		    {
		    	//echo "<table><tr><th></th><th></th></tr>";
		    	while($row = $result->fetch_assoc())
		    	{
		    		$u_text = $row['u_text'];
		    		$a_text = $row['a_text'];

		    		echo "<p style='text-align:right;'>".$u_text."</p>";

		    		echo "<p style='text-align:left;'>".$a_text."</p>";
		    		
		    	}

		    	

		    	//echo "<script>window.location.href='http:/conference/admin/chat_admin.php';</script>";
		    }
		    else
		    {
		    	$sql ="SELECT chat.* FROM chat ";

		    	$result = $conn->query($sql);

		    	if($result ->num_rows > 0)
		    	{
		    		while($row = $result ->fetch_assoc())
		    		{
		    			$u_text = $row['u_text'];

		    			echo "<p style='text-align:right;'>".$u_text."</p>";

		    		}
		    	}

		    }





		    ?>

		</div>
		<div class="messege" >

				<input type="text" name="text" placeholder="messege" >
			    <input style="background-color: #4CAF50; border: none; padding: 8px 16px; text-decoration: none; display: inline-block; font-size: 16px; margin: 2px 1px; cursor: pointer;" type="submit" name="submit" value="send"><br>
			    <p></p>
			</div>


	</form>

</body>
</html>