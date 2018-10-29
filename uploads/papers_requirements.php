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
        border: 1px solid white;  
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 65px;
	    padding-left: 5px;
	    text-align: center;
	    width: 100%;
	    background: #e1e5ea;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid white;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 50px;
	    padding-left:  35px;
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
	    transform: translate(0%,-450%);
    }
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: green;
	    text-align: center;
	    border:1px solid #5daf3f;
	    width: 98%;
	    transform: translate(0%,-150%);

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
	    height: 3050px;
	    width: 98%;
	    text-align: center;
	    transform: translate(0%,0%);

	}
	.requirements input[type = 'text']
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
	.author input[type='number']
	{
		width: 64%;
	    height: 50px;
	    padding: 12px 20px;
	    box-sizing: border-box;
	    border: 2px solid #ccc;
	    border-radius: 4px;
	    background-color: #f8f8f8;
	    font-size: 16px;
	    resize: none;

	}
	.author input[type='submit']
	{
		height: 45px;
		color: #58aa61;
	}
	.class
	{
		background-color:#5783a9;
		padding-top: 40px;
		width: 70%;
		transform: translate(21%,0%);
		background: rgb(0,0,0,0.2);
		border-radius: 10px;

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
		  <li style="float:right"><a href="http:/conference/users/faq.php">FAQ</a></li>	
		  <li style="float:right"><a href="http:/conference/users/settings.php">settings</a></li>
	</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="" enctype="multipart/form-data">
	
		

<div class="requirements">

		<h2>Conference Details<hr></h2>
		
		<?php 

		$user = $_SESSION['username'];

            
   $con_id = $_SESSION['con_id'];
   $conference = $_SESSION['conferencename'];
   $date = $_SESSION['date'];
   $start = $_SESSION['starttime'];
   $end = $_SESSION['endtime'];
   $venue = $_SESSION['venue'];
   $room = $_SESSION['conferenceroom'];
   $description = $_SESSION['description'];
   $created_by = $_SESSION['username'];



		echo "<table><tr><th>Date</th><th>Start</th><th>End</th><th>venue</th><th>Room No.</th></tr>";
		echo "<tr><td>".$date."</td><td>".$start. "</td><td>".$end."</td><td>".$venue."</td><td>".$room."</td></tr></table>"; ?><br><hr>
		<p style="font-size: large;">Please fill up all the folowing boxes before uploading a paper in <?php echo "'".$conference."'."; ?></p>
		   <div class="author">
		   	<input type="number" name="num_author" placeholder="number of authors" min="1" max="5" required="" value="<?php if(isset($_POST['num_author'])){echo htmlentities($_POST['num_author']);} ?>">
			<input type="submit" name="add" value="add author"><br><br><br>

			<?php
 
   
  

   $user = $_SESSION['username'];
            
   $con_id = $_SESSION['con_id'];
   $conference = $_SESSION['conferencename'];
   $date = $_SESSION['date'];
   $start = $_SESSION['starttime'];
   $end = $_SESSION['endtime'];
   $venue = $_SESSION['venue'];
   $room = $_SESSION['conferenceroom'];
   $description = $_SESSION['description'];
   $created_by = $_SESSION['username'];


   //echo "".$con_id."<br>".$conference."<br>".$date."<br>".$start."<br>".$end."<br>".$venue."<br>".$room."<br>".$description."<br>".$created_by;
   if(isset($_POST['upload']))
   {
   	  $num_author = $_POST['num_author'];

   	  if($num_author==1)
   	  {

   	  	if(isset($_POST['title'],$_POST['email'],$_POST['author1'],$_POST['email1'],$_POST['abstract']))
	  	{
	  		$title = $_POST['title'];
	  		$author1 = $_POST['author1'];
	  		$email1 = $_POST['email1'];
	  		$email = $_POST['email'];
	  		$abstract = $_POST['abstract'];

	  		if($title == NULL OR $abstract == NULL)
	  		{
  				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "fill up all empty boxes";

				echo "</div>";
	  		}
	  	    else
	  		{
	  			
      // echo "title: ".$title."<br>"."author: ".$author."<br>"."email: ".$email."<br>"."abstract:".$abstract ;

				$selected_id = $con_id;
				$file = 'file';

			  	$file1 = $_FILES[$file];
			 
			  	$filename = $_FILES[$file]['name'];
			  	$fileTmpName = $_FILES[$file]['tmp_name'];
			  	$fileSize = $_FILES[$file]['size'];
			  	$fileError = $_FILES[$file]['error'];
			  	$fileType = $_FILES[$file]['type'];
		        
			  	$fileExt = explode('.', $filename);
			  	$fileActualText = strtolower(end($fileExt));


			  	$allowed = array('jpg','jpeg','pnj','pdf','ppt','php');

			  	if(in_array( $fileActualText,$allowed))
			  	{
			  		if($fileError == 0)
			  		{
			  			if($fileSize < 100000000)
			  			{
			  				$fileNameNew = $filename." ".uniqid('',true).".".$fileActualText;
			  				$fileDestination = 'uploads1/'.$fileNameNew;

			  				#echo "file name new :".$fileNameNew;

			  				move_uploaded_file($fileTmpName, $fileDestination);

			  				$sql = "SELECT conferences.conferencename FROM conferences WHERE conferences.con_id = '$selected_id'";

			  				$result= $conn->query($sql);

			  				if($result ->num_rows > 0)
			  				{
			  					while($row = $result->fetch_assoc())
			  					{
			  						$conference = $row['conferencename'];
			  					}
			  					
			  				}
			  				//$username = $_SESSION['username'];
			  				$_SESSION['conferencename']= $conference;

					        $date = date('y-m-d');

			  				$sql1 = "INSERT INTO papers (papers,submission_date,submitted_by,email,conferencename,author1,email1,title,abstract,con_id,num_author) VALUES ('$fileNameNew','$date','$user','$email','$conference','$author1','$email1','$title','$abstract','$con_id','$num_author')";

			  				if($conn->query($sql1) == TRUE)
			  				{	
								echo "<span style ='color:green;'>upload successful</span><br><br>";	
			  				}
			  				

			  				#echo "papers: ".$papers;

			  					 
			  			}
			  			else
			  			{
			  				echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "Your file is too big!";

							echo "</div>";

			  			}

			  		}
			  		else
			  		{
			  			echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "there was an error uploading your file!";

						echo "</div>";
			  		}

			  	}
			  	else
			  	{
			  		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "You can't upload file of this type!";

					echo "</div>";
			  	}

			  	
			  	$selected_id = $con_id;

			  	if(isset($filename))
			  	{

			  	}
			  	else
			  	{
			  		//$selected_papers = $file1;

			  		//echo "selected files:".$selected_papers."<br>";
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "choose a file";

					echo "</div>";
				}

	  		
	  		}

	  	}
   	  }
   	  elseif($num_author == 2)
   	  {
   	  	if(isset($_POST['title'],$_POST['email'],$_POST['author1'],$_POST['email1'],$_POST['author2'],$_POST['email2'],$_POST['abstract']))
	  	{
	  		$title = $_POST['title'];
	  		$author1 = $_POST['author1'];
	  		$email1 = $_POST['email1'];
	  		$author2 = $_POST['author2'];
	  		$email2 = $_POST['email2'];
	  		$email = $_POST['email'];
	  		$abstract = $_POST['abstract'];

	  		if($title == NULL OR $abstract == NULL)
	  		{
  				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "fill up all empty boxes";

				echo "</div>";
	  		}
	  	    else
	  		{
	  			
      // echo "title: ".$title."<br>"."author: ".$author."<br>"."email: ".$email."<br>"."abstract:".$abstract ;

				$selected_id = $con_id;
				$file = 'file';

			  	$file1 = $_FILES[$file];
			 
			  	$filename = $_FILES[$file]['name'];
			  	$fileTmpName = $_FILES[$file]['tmp_name'];
			  	$fileSize = $_FILES[$file]['size'];
			  	$fileError = $_FILES[$file]['error'];
			  	$fileType = $_FILES[$file]['type'];
		        
			  	$fileExt = explode('.', $filename);
			  	$fileActualText = strtolower(end($fileExt));


			  	$allowed = array('jpg','jpeg','pnj','pdf','ppt','php');

			  	if(in_array( $fileActualText,$allowed))
			  	{
			  		if($fileError == 0)
			  		{
			  			if($fileSize < 100000000)
			  			{
			  				$fileNameNew = $filename." ".uniqid('',true).".".$fileActualText;
			  				$fileDestination = 'uploads1/'.$fileNameNew;

			  				#echo "file name new :".$fileNameNew;

			  				move_uploaded_file($fileTmpName, $fileDestination);

			  				$sql = "SELECT conferences.conferencename FROM conferences WHERE conferences.con_id = '$selected_id'";

			  				$result= $conn->query($sql);

			  				if($result ->num_rows > 0)
			  				{
			  					while($row = $result->fetch_assoc())
			  					{
			  						$conference = $row['conferencename'];
			  					}
			  					
			  				}
			  				//$username = $_SESSION['username'];
			  				$_SESSION['conferencename']= $conference;

					        $date = date('y-m-d');

			  				$sql1 = "INSERT INTO papers (papers,submission_date,submitted_by,email,conferencename,author1,email1,author2,email2,title,abstract,con_id,num_author) VALUES ('$fileNameNew','$date','$user','$email','$conference','$author1','$email1','$author2','$email2','$title','$abstract','$con_id','$num_author')";

			  				if($conn->query($sql1) == TRUE)
			  				{
			  					echo "<span style ='color:green;'>upload successful</span><br><br>";

			  				}
			  				

			  				#echo "papers: ".$papers;

			  					 
			  			}
			  			else
			  			{
			  				echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "Your file is too big!";

							echo "</div>";

			  			}

			  		}
			  		else
			  		{
			  			echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "there was an error uploading your file!";

						echo "</div>";
			  		}

			  	}
			  	else
			  	{
			  		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "You can't upload file of this type!";

					echo "</div>";
			  	}

			  	
			  	$selected_id = $con_id;

			  	if(isset($filename))
			  	{

			  	}
			  	else
			  	{
			  		//$selected_papers = $file1;

			  		//echo "selected files:".$selected_papers."<br>";
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "choose a file";

					echo "</div>";
				}

	  		
	  		}

	  	}
   	  }
   	  elseif($num_author == 3)
   	  {
   	  	if(isset($_POST['title'],$_POST['email'],$_POST['author1'],$_POST['email1'],$_POST['author2'],$_POST['email2'],$_POST['author3'],$_POST['email3'],$_POST['abstract']))
	  	{
	  		$title = $_POST['title'];
	  		$author1 = $_POST['author1'];
	  		$email1 = $_POST['email1'];
	  		$author2 = $_POST['author2'];
	  		$email2 = $_POST['email2'];
	  		$author3 = $_POST['author3'];
	  		$email3 = $_POST['email3'];
	  		$email = $_POST['email'];
	  		$abstract = $_POST['abstract'];

	  		if($title == NULL OR $abstract == NULL)
	  		{
  				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "fill up all empty boxes";

				echo "</div>";
	  		}
	  	    else
	  		{
	  			
      // echo "title: ".$title."<br>"."author: ".$author."<br>"."email: ".$email."<br>"."abstract:".$abstract ;

				$selected_id = $con_id;
				$file = 'file';

			  	$file1 = $_FILES[$file];
			 
			  	$filename = $_FILES[$file]['name'];
			  	$fileTmpName = $_FILES[$file]['tmp_name'];
			  	$fileSize = $_FILES[$file]['size'];
			  	$fileError = $_FILES[$file]['error'];
			  	$fileType = $_FILES[$file]['type'];
		        
			  	$fileExt = explode('.', $filename);
			  	$fileActualText = strtolower(end($fileExt));


			  	$allowed = array('jpg','jpeg','pnj','pdf','ppt','php');

			  	if(in_array( $fileActualText,$allowed))
			  	{
			  		if($fileError == 0)
			  		{
			  			if($fileSize < 100000000)
			  			{
			  				$fileNameNew = $filename." ".uniqid('',true).".".$fileActualText;
			  				$fileDestination = 'uploads1/'.$fileNameNew;

			  				#echo "file name new :".$fileNameNew;

			  				move_uploaded_file($fileTmpName, $fileDestination);

			  				$sql = "SELECT conferences.conferencename FROM conferences WHERE conferences.con_id = '$selected_id'";

			  				$result= $conn->query($sql);

			  				if($result ->num_rows > 0)
			  				{
			  					while($row = $result->fetch_assoc())
			  					{
			  						$conference = $row['conferencename'];
			  					}
			  					
			  				}
			  				//$username = $_SESSION['username'];
			  				$_SESSION['conferencename']= $conference;

					        $date = date('y-m-d');

			  				$sql1 = "INSERT INTO papers (papers,submission_date,submitted_by,email,conferencename,author1,email1,author2,email2,author3,email3,title,abstract,con_id,num_author) VALUES ('$fileNameNew','$date','$user','$email','$conference','$author1','$email1','$author2','$email2','$author3','$email3','$title','$abstract','$con_id','$num_author')";

			  				if($conn->query($sql1) == TRUE)
			  				{	
								echo "<span style ='color:green;'>upload successful</span><br><br>";	
			  				}
			  				

			  				#echo "papers: ".$papers;

			  					 
			  			}
			  			else
			  			{
			  				echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "Your file is too big!";

							echo "</div>";

			  			}

			  		}
			  		else
			  		{
			  			echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "there was an error uploading your file!";

						echo "</div>";
			  		}

			  	}
			  	else
			  	{
			  		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "You can't upload file of this type!";

					echo "</div>";
			  	}

			  	
			  	$selected_id = $con_id;

			  	if(isset($filename))
			  	{

			  	}
			  	else
			  	{
			  		//$selected_papers = $file1;

			  		//echo "selected files:".$selected_papers."<br>";
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "choose a file";

					echo "</div>";
				}

	  		
	  		}

	  	}
   	  }
   	  elseif($num_author == 4)
   	  {
   	  	if(isset($_POST['title'],$_POST['email'],$_POST['author1'],$_POST['email1'],$_POST['author2'],$_POST['email2'],$_POST['author3'],$_POST['email3'],$_POST['author4'],$_POST['email4'],$_POST['abstract']))
	  	{
	  		$title = $_POST['title'];
	  		$author1 = $_POST['author1'];
	  		$email1 = $_POST['email1'];
	  		$author2 = $_POST['author2'];
	  		$email2 = $_POST['email2'];
	  		$author3 = $_POST['author3'];
	  		$email3 = $_POST['email3'];
	  		$author4 = $_POST['author4'];
	  		$email4 = $_POST['email4'];
	  		$email = $_POST['email'];
	  		$abstract = $_POST['abstract'];

	  		if($title == NULL OR $abstract == NULL)
	  		{
  				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "fill up all empty boxes";

				echo "</div>";
	  		}
	  	    else
	  		{
	  			
      // echo "title: ".$title."<br>"."author: ".$author."<br>"."email: ".$email."<br>"."abstract:".$abstract ;

				$selected_id = $con_id;
				$file = 'file';

			  	$file1 = $_FILES[$file];
			 
			  	$filename = $_FILES[$file]['name'];
			  	$fileTmpName = $_FILES[$file]['tmp_name'];
			  	$fileSize = $_FILES[$file]['size'];
			  	$fileError = $_FILES[$file]['error'];
			  	$fileType = $_FILES[$file]['type'];
		        
			  	$fileExt = explode('.', $filename);
			  	$fileActualText = strtolower(end($fileExt));


			  	$allowed = array('jpg','jpeg','pnj','pdf','ppt','php');

			  	if(in_array( $fileActualText,$allowed))
			  	{
			  		if($fileError == 0)
			  		{
			  			if($fileSize < 100000000)
			  			{
			  				$fileNameNew = $filename." ".uniqid('',true).".".$fileActualText;
			  				$fileDestination = 'uploads1/'.$fileNameNew;

			  				#echo "file name new :".$fileNameNew;

			  				move_uploaded_file($fileTmpName, $fileDestination);

			  				$sql = "SELECT conferences.conferencename FROM conferences WHERE conferences.con_id = '$selected_id'";

			  				$result= $conn->query($sql);

			  				if($result ->num_rows > 0)
			  				{
			  					while($row = $result->fetch_assoc())
			  					{
			  						$conference = $row['conferencename'];
			  					}
			  					
			  				}
			  				//$username = $_SESSION['username'];
			  				$_SESSION['conferencename']= $conference;

					        $date = date('y-m-d');

			  				$sql1 = "INSERT INTO papers (papers,submission_date,submitted_by,email,conferencename,author1,email1,author2,email2,author3,email3,author4,email4,title,abstract,con_id,num_author) VALUES ('$fileNameNew','$date','$user','$email','$conference','$author1','$email1','$author2','$email2','$author3','$email3','$author4','$email4','$title','$abstract','$con_id','$num_author')";

			  				if($conn->query($sql1) == TRUE)
			  				{	
								echo "<span style ='color:green;'>upload successful</span><br><br>";	
			  				}
			  				

			  				#echo "papers: ".$papers;

			  					 
			  			}
			  			else
			  			{
			  				echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "Your file is too big!";

							echo "</div>";

			  			}

			  		}
			  		else
			  		{
			  			echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "there was an error uploading your file!";

						echo "</div>";
			  		}

			  	}
			  	else
			  	{
			  		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "You can't upload file of this type!";

					echo "</div>";
			  	}

			  	
			  	$selected_id = $con_id;

			  	if(isset($filename))
			  	{

			  	}
			  	else
			  	{
			  		//$selected_papers = $file1;

			  		//echo "selected files:".$selected_papers."<br>";
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "choose a file";

					echo "</div>";
				}

	  		
	  		}

	  	}

   	  }
   	  elseif($num_author == 5)
   	  {
   	  	if(isset($_POST['title'],$_POST['email'],$_POST['author1'],$_POST['email1'],$_POST['author2'],$_POST['email2'],$_POST['author3'],$_POST['email3'],$_POST['author4'],$_POST['email4'],$_POST['author5'],$_POST['email5'],$_POST['abstract']))
	  	{
	  		$title = $_POST['title'];
	  		$author1 = $_POST['author1'];
	  		$email1 = $_POST['email1'];
	  		$author2 = $_POST['author2'];
	  		$email2 = $_POST['email2'];
	  		$author3 = $_POST['author3'];
	  		$email3 = $_POST['email3'];
	  		$author4 = $_POST['author4'];
	  		$email4 = $_POST['email4'];
	  		$author5 = $_POST['author5'];
	  		$email5 = $_POST['email5'];
	  		$email = $_POST['email'];
	  		$abstract = $_POST['abstract'];
	  		


	  		if($title == NULL OR $abstract == NULL)
	  		{
  				echo "<div class ='alert'>";

				echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
				echo "fill up all empty boxes";

				echo "</div>";
	  		}
	  	    else
	  		{
	  			
      // echo "title: ".$title."<br>"."author: ".$author."<br>"."email: ".$email."<br>"."abstract:".$abstract ;

				$selected_id = $con_id;
				$file = 'file';

			  	$file1 = $_FILES[$file];
			 
			  	$filename = $_FILES[$file]['name'];
			  	$fileTmpName = $_FILES[$file]['tmp_name'];
			  	$fileSize = $_FILES[$file]['size'];
			  	$fileError = $_FILES[$file]['error'];
			  	$fileType = $_FILES[$file]['type'];
		        
			  	$fileExt = explode('.', $filename);
			  	$fileActualText = strtolower(end($fileExt));


			  	$allowed = array('jpg','jpeg','pnj','pdf','ppt','php');

			  	if(in_array( $fileActualText,$allowed))
			  	{
			  		if($fileError == 0)
			  		{
			  			if($fileSize < 100000000)
			  			{
			  				$fileNameNew = $filename." ".uniqid('',true).".".$fileActualText;
			  				$fileDestination = 'uploads1/'.$fileNameNew;

			  				#echo "file name new :".$fileNameNew;

			  				move_uploaded_file($fileTmpName, $fileDestination);

			  				$sql = "SELECT conferences.conferencename FROM conferences WHERE conferences.con_id = '$selected_id'";

			  				$result= $conn->query($sql);

			  				if($result ->num_rows > 0)
			  				{
			  					while($row = $result->fetch_assoc())
			  					{
			  						$conference = $row['conferencename'];
			  					}
			  					
			  				}
			  				//$username = $_SESSION['username'];
			  				$_SESSION['conferencename']= $conference;

					        $date = date('y-m-d');

			  				$sql1 = "INSERT INTO papers (papers,submission_date,submitted_by,email,conferencename,author1,email1,author2,email2,author3,email3,author4,email4,author5,email5,title,abstract,con_id,num_author) VALUES ('$fileNameNew','$date','$user','$email','$conference','$author1','$email1','$author2','$email2','$author3','$email3','$author4','$email4','$author5','$email5','$title','$abstract','$con_id','$num_author')";

			  				if($conn->query($sql1) == TRUE)
			  				{
			  					echo "<span style ='color:green;'>upload successful</span><br><br>";

			  				}
			  				

			  				#echo "papers: ".$papers;

			  					 
			  			}
			  			else
			  			{
			  				echo "<div class ='alert'>";

							echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
							echo "Your file is too big!";

							echo "</div>";

			  			}

			  		}
			  		else
			  		{
			  			echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "there was an error uploading your file!";

						echo "</div>";
			  		}

			  	}
			  	else
			  	{
			  		echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "You can't upload file of this type!";

					echo "</div>";
			  	}

			  	
			  	$selected_id = $con_id;

			  	if(isset($filename))
			  	{

			  	}
			  	else
			  	{
			  		//$selected_papers = $file1;

			  		//echo "selected files:".$selected_papers."<br>";
					echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "choose a file";

					echo "</div>";
				}

	  		
	  		}

	  	}
   	  }

   }
	   

	  
	
?>
			
			<?php 
                 if(isset($_POST['add']))
                 {
                 	 if(isset($_POST['num_author']))
                 	 {
                 	 	 $num_author = $_POST['num_author'];

	                 	 if($num_author == 1)
	                 	 {
	                 	 	echo "<div class='class'>";
	                 	 	echo "<input type='text' name='author1' placeholder='author1' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email1' placeholder='email1' required=''><br><br><br>";
	                 	 	echo "</div><br><br><br>";
	                 	 }
	                 	 elseif($num_author == 2)
	                 	 {
	                 	 	echo "<div class='class'>";
	                 	 	echo "<input type='text' name='author1' placeholder='author1' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email1' placeholder='email1' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author2' placeholder='author2' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email2' placeholder='email2' required=''><br><br><br>";
	                 	 	echo "</div><br><br><br>";

	                 	 }
	                 	 elseif($num_author == 3)
	                 	 {
	                 	 	echo "<div class='class'>";
	                 	 	echo "<input type='text' name='author1' placeholder='author1' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email1' placeholder='email1' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author2' placeholder='author2' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email2' placeholder='email2' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author3' placeholder='author3' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email3' placeholder='email3' required=''><br><br><br>";
	                 	 	echo "</div><br><br><br>";

	                 	 }
	                 	 elseif($num_author == 4)
	                 	 {
	                 	 	echo "<div class='class'>";
	                 	 	echo "<input type='text' name='author1' placeholder='author1' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email1' placeholder='email1' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author2' placeholder='author2' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email2' placeholder='email2' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author3' placeholder='author3' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email3' placeholder='email3' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author4' placeholder='author4' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email4' placeholder='email4' required=''><br><br><br>";
	                 	 	echo "</div><br><br><br>";

	                 	 }
	                 	 elseif($num_author == 5)
	                 	 {
	                 	 	echo "<div class='class'>";
	                 	 	echo "<input type='text' name='author1' placeholder='author1' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email1' placeholder='email1' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author2' placeholder='author2' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email2' placeholder='email2' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author3' placeholder='author3' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email3' placeholder='email3' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author4' placeholder='author4' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email4' placeholder='email4' required=''><br><br><br>";
	                 	 	echo "<input type='text' name='author5' placeholder='author5' required=''><br><br><br>";
	                 	 	echo "<input type='email' name='email5' placeholder='email5' required=''><br><br><br>";
	                 	 	echo "</div><br><br><br>";

	                 	 }
                 	 }

                 }

			?>

		</div>
		<input type="text" name="title" placeholder="title of your paper"><br><br><br>
		<input type="email" name="email" placeholder="email"><br><br><br>

		<textarea name="abstract" placeholder="abstract of your paper..." rows="5" cols="160"></textarea><br><br><br>
		<input type="file" name="file"><input type="submit" name="upload" value="upload"><br><br><br>

		<h2>Uploaded papers in <?php echo "'".$conference."'."; ?> <hr></h2>

		<?php

             //$username = $_SESSION['username'];
		   // $manager = $_SESSION['username'];
		    //$id = $_SESSION['papers_id'];
		     //$num_author = $_POST['num_author'];
             $num_papers = 0;
             $string ="";

			$sql ="SELECT papers.* FROM papers WHERE papers.con_id ='$con_id' AND papers.conferencename='$conference'";

			$result = $conn->query($sql);

			if($result ->num_rows >0)
			{
				$i=0;
				echo "<table><tr><th>Papers No.</th><th>link</th><th>conference</th><th>review(LAST)</th><th>comment(LAST)</th><th>All review</th></tr>";
								

				while($row = $result->fetch_assoc())
				{
					$i++;
					
                    $papers_id[$i] = $row['papers_id'];
                    $conference = $row['conferencename'];
					$papers = $row['papers'];
					$sub_by = $row['submitted_by'];
					$review = $row['review'];
					$comment = $row['comment'];

					
					
					if($user == $sub_by)
					{
						if($review == NULL AND $comment == NULL)
						{
							echo "<tr>"."<td>[".$i."]</td>"."<td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$conference."</td><td><span style='color:red;'>*still not reviewed</span></td><td><span style='color:red;'>*still not commented</span></td><td><input style ='transform: translate(10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='show".$i."' value='show all review'></td></tr>";

						}
						else
						{
							echo "<tr>"."<td>[".$i."]</td>"."<td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$conference."</td><td>".$review."</td><td>".$comment."</td><td><input style ='transform: translate(10%,0%); background-color: #008CBA;border: none;color: white; padding: 16px 32px;text-align: center;'type='submit' name='show".$i."' value='show all review'></td></tr>";
						}
						
					}
					else
					{
						echo "<tr>"."<td>[".$i."]</td>"."<td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$conference."</td><td><span style='color :red'>*restricted.</span></td><td><span style='color :red'>*restricted.</span></td><td><span style='color :red'>*restricted.</td></tr>";

					}
					
																				
					
				}
				//header('location:http:/conference/uploads/currentconferences.php');
				//$string .= $_SESSION['papers'];
				echo "</table>";

				$num_papers =$i;
				//session_destroy();
			
			}
			else
			{
				echo "<span style='color:red; text-align:center;'>*no papers uploaded yet!</span>";
			}
			for($i=0; $i<=$num_papers; $i++)
			{
				$show_btn = 'show'.$i;

				 if(isset($_POST[$show_btn]))
				 {
				 	$selected_id = $papers_id[$i];

					$sql= "SELECT papers.* FROM papers WHERE papers.papers_id='$selected_id'";

					$result = $conn->query($sql);

					if($result ->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							$id = $row['papers_id'];
							$papers = $row['papers'];
							$sub_date = $row['submission_date'];
							$sub_by = $row['submitted_by'];
						    $conference =$row['conferencename'];
						    $title = $row['title'];
						    $author = $row['author'];
						    $email = $row['email'];
						    $abstract = $row['abstract'];

						    $_SESSION['papers_id'] = $id;
						    $_SESSION['papers'] = $papers;
						    $_SESSION['submission_date'] = $sub_date;
						    $_SESSION['submitted_by'] = $sub_by;
						    $_SESSION['conferencename'] = $conference;
						    $_SESSION['title'] = $title;
						    $_SESSION['author'] = $author;
						    $_SESSION['email'] = $email;
						    $_SESSION['abstract'] = $abstract;

						    echo "<script>window.location.href='http:/conference/users/show_all_review.php'</script>";
						    //echo "".$id;


						}
						/*echo "papers id: ".$id."<br>";
						echo "papers: ".$papers."<br>";
						echo "submission date: ".$sub_date."<br>";
						echo "submitted by: ".$sub_by."<br>";
						echo "conference name: ".$sub_by."<br>";
						echo "author: ".$author."<br>";
						echo "email: ".$email."<br>";
						echo "abstract: ".$abstract;*/
					}
				 }
			}
			if(isset($_POST['assign']))
			{
				$selected_id = $papers_id;

				$sql= "SELECT papers.* FROM papers WHERE papers.papers_id='$selected_id'";

				$result = $conn->query($sql);

					if($result ->num_rows >0)
					{
						while($row = $result->fetch_assoc())
						{
							$id = $row['papers_id'];
							$papers = $row['papers'];
							$sub_date = $row['submission_date'];
							$sub_by = $row['submitted_by'];
						    $conference =$row['conferencename'];
						    $title = $row['title'];
						    $author = $row['author'];
						    $email = $row['email'];
						    $abstract = $row['abstract'];

						    /*$_SESSION['papers_id'] = $id;
						    $_SESSION['papers'] = $papers;
						    $_SESSION['submission_date'] = $sub_date;
						    $_SESSION['submitted_by'] = $sub_by;
						    $_SESSION['conferencename'] = $conference;
						    $_SESSION['title'] = $title;
						    $_SESSION['author'] = $author;
						    $_SESSION['email'] = $email;
						    $_SESSION['abstract'] = $abstract;*/

						    echo "<script>window.location.href='http:/conference/users/assign_reviewer.php'</script>";


						}
						/*echo "papers id: ".$id."<br>";
						echo "papers: ".$papers."<br>";
						echo "submission date: ".$sub_date."<br>";
						echo "submitted by: ".$sub_by."<br>";
						echo "conference name: ".$sub_by."<br>";
						echo "author: ".$author."<br>";
						echo "email: ".$email."<br>";
						echo "abstract: ".$abstract;*/
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
		

	</form>


</body>
</html>