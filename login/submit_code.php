
<!DOCTYPE html>
<html>
<head>
	<title>sign in</title>
</head>
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
		    transform: translate(0%,-430%);

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
	    .code
	    {
	    	padding: 20px;
	    	padding-top: 70px;
	    	padding-bottom: 20px;
		    background-color:white;
		    height: 230px;
		    width: 710px;
		    transform: translate(45%,14%);
		    border: 1px solid grey;
	    }
	    .recover input[type='number']
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
		    transform: translate(0%,-430%);

        }
	   /* .recover input[typt ='submit']
	    {
			background-color: #4CAF50; 
		    border: none;
		    color: white;
		    padding: 15px 32px;
		    text-align: center;
		    text-decoration: none;
		    display: inline-block;
		    font-size: 16px;
		    margin: 4px 2px;
		    cursor: pointer;
	    }*/ 

	</style>
	<form action="" method="POST">
		<header><h1 style="padding-left: 20px;">CONFERENCE MANAGEMENT SYSTEM</h1>
		
		</header><hr>
		<div class="code">
			<h1>CODE</h1><hr>
			<p style="font-size: 20px;">Please enter the copied code.</p>
			<input type="number" name="code" ><br><br>
			<input type="submit" name="submit">

			<?php
			   require 'config.php';
			   session_start();

			   $email = $_SESSION['email'];

			   if(isset($_POST['code']))
			   {
			   	  $code = $_POST["code"];

			   	  if($code == NULL)
			   	  {
			   	  	echo "<div class ='alert'>";

					echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
					echo "<span style='color:red'>code NULL!</span>";

					echo "</div>";
			   	  }
			   	  else
			   	  {
			   	  	 $sql = "SELECT user.code FROM user WHERE user.email='$email'";

			   	  	 $result = $conn->query($sql);

			   	  	 if($result->num_rows > 0)
			   	  	 {
			   	  	 	while($row = $result->fetch_assoc())
			   	  	 	{
			   	  	 		$code1 = $row['code'];
			   	  	 	}
			   	  	 	if($code == $code1)
			   	  	 	{
			   	  	 		header('location:http:/conference/login/change_pass.php');
			   	  	 	}
			   	  	 }
			   	  	 else
			   	  	 {
			   	  	 	echo "<div class ='alert'>";

						echo "<span class ='closebtn' onclick ='this.parentElement.style.display='none';'>&times;</span>";
						echo "<span style='color:red'>code missmatched!</span>";

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