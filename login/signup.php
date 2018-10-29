<?php
    require 'config.php';
  //session_start();


 ?>
<!DOCTYPE html>
<html>
<head>
	<title>sign up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>
body
{
	background: white;
}
.signupBox
{
   
    
    width: 30%;
    height: 710px;
    box-sizing: border-box;
    background: transparent;
    padding-left: 5%;
    padding-top: 4%;
    transform: translate(120%,10%);
    border: 1px solid grey;
    
   
}
h1
{
    text-align: center;
    color:#c5db6f;


}
.signupBox input[type=text], 
.signupBox input[type=password],
.signupBox input[type=email] {

    
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
.signupBox input[type=checkbox]
{
	transform: translate(-4000%,-800%);


}
.signupBox button {

    background-color:#1775c1; /* Green */
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
    border-radius: 4px;


 
}
button:hover {
    opacity: 0.90;
}
footer
{
  background-color: #a3a19b;
  height: 105px;
  text-align: center;

}
.signin button
{
	height: 50px;
	width: 110px;
	background: transparent;
	border-radius: 20px;
	border: 1px solid grey;
	font-size: 20px;

}
.signup button
{
	height: 50px;
	width: 110px;
	background: transparent;
	border-radius: 20px;
	border: 1px solid grey;
	font-size: 20px;
	transform: translate(-120%,-100%);

}
footer
{
	width: 105%;
	height:300px;
	background-color:#2c2d2d;
	transform: translate(0%,75%);
}
.left
{
	
	width: 10%;
	transform: translate(100%,30%);
}
.middle
{
	width: 12%;
	transform: translate(250%,-68%);
	height: 250px;

}
.right
{
	transform: translate(10%,60%);
}
.fa 
{
  padding: 20px;
  font-size: 20px;
  width: 20px;
  border-radius: 40px;
  text-align: center;
  text-decoration: none;
  margin: 5px 2px;
  transform: translate(810%,-500%);
}

.fa:hover 
{
    opacity: 0.7;
}
.fa-facebook
{
  background: #3B5998;
  color: white;
}
.fa-twitter
{
  background: #55ACEE;
  color: white;
}
.fa-instagram
{
  background: #125688;
  color: white;
}
.fa-google 
{
  background: #dd4b39;
  color: white;
}
.hr
{
	transform: translate(0%,-15200%);
	border: 0;
}
.link1
{
	transform: translate(18%,200%);
}
.last
{
	
	transform: translate(87.5%,-1030%);
	width: 40%;
	height: 10%;
	
}
.second
{
	transform: translate(11.5%,-105%);

}
.third
{
	transform: translate(25.5%,-205%);

}
.link
{
	position: absolute;
	transform: translate(1200%,-10%);
}



	</style>
</head>
<body>
	<form action="signin.php" method="POST"><div class="signin" style="text-align: right;"><button>Sign In</button></div></form>
	<form action="signup.php" method="POST"><div class="signup" style="text-align: right;"><button>Sign Up</button></div></form>
	<h1></h1>
	<div class="link" style="font-size: 20px; transform: translate(0%,0%);">
		<p style="font-size:25px;"><a href="http:/conference/login/about_us.php" style="text-decoration: none;">About Us </a></p>
		<p style="transform: translate(140px,-55px); font-size:25px;"><a href="http:/conference/login/contact_us.php" style="text-decoration: none;">Conatct Us </a></p>
		<p style="transform: translate(285px,-110px); font-size:25px;"><a href="http:/conference/login/question_outside.php" style="text-decoration: none;">Question Us </a></p>
		<p style="transform: translate(445px,-163px); font-size:25px;"><a href="http:/conference/login/news.php" style="text-decoration: none;">News</a></p>
		<p style="transform: translate(535px,-217px); font-size:25px;"><a href="http:/conference/login/faq_outside.php" style="text-decoration: none;">FAQ</a></p>
	</div>
	<form action="" method="POST">
		
		<div class="signupBox">
			<h2 style="color:#3c4d4f;">Registration</h2>

			<input type="text" name="firstname" placeholder="first name" required=""><br><br>
			
			<input type="text" name="lastname" placeholder="last name" required=""><br><br>
			
			<input type="text" name="username" placeholder="username" required=""><br><br>
			
			<input type="email" name="email" placeholder="e-mail" required=""><br><br>
			<?php

			if(isset($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['confirmpassword']))
			 {
			 	$fname = $_POST["firstname"];
			 	$lname = $_POST["lastname"];
			 	$uname = $_POST["username"];
			 	$email = $_POST["email"];
			 	$pass = $_POST["password"];
			 	$confirmpass = $_POST["confirmpassword"];

			 	if($fname == NULL OR $lname == NULL OR $uname == NULL OR $email == NULL OR $pass == NULL OR $confirmpass == NULL)
			 	{
			 		echo "<span style = 'color:red;'>FILL UP ALL REQUIREMENTS</span>";
			 	}
			 	else
			 	{
			 		if($pass == $confirmpass)
				 	{
				 		$sql = "INSERT INTO user(firstname,lastname,username,email,password) VALUES ('$fname','$lname','$uname','$email','$pass')";

					 	if($conn->query($sql) == TRUE)
					 	{
					 		//echo "<span style = 'color:green;'>You are registered</span>";
					 		//$_SESSION['username'] = $_POST['username'];

					 		echo "<script>window.location.href='http:/conference/login/signin.php';</script>";
					 	}
					 	else
					 	{
					 		echo "<span style ='color: red;'>SOMETHING WRONG!</span>";
					 	}
			 	    }
			 	    else
				 	{
				 		echo "<span style = 'color:red;'>*password missmatched</span>";
				 	}
			 	}
			 }  
			?>
			
			<input type="password" name="password" placeholder="password" required=""><br><br>
			<?php

			if(isset($_POST['firstname'],$_POST['lastname'],$_POST['username'],$_POST['email'],$_POST['password'],$_POST['confirmpassword']))
			 {
			 	$fname = $_POST["firstname"];
			 	$lname = $_POST["lastname"];
			 	$uname = $_POST["username"];
			 	$email = $_POST["email"];
			 	$pass = $_POST["password"];
			 	$confirmpass = $_POST["confirmpassword"];

			 	if($fname == NULL OR $lname == NULL OR $uname == NULL OR $email == NULL OR $pass == NULL OR $confirmpass == NULL)
			 	{
			 		echo "<span style = 'color:red;'>FILL UP ALL REQUIREMENTS</span>";
			 	}
			 	else
			 	{
			 		if($pass == $confirmpass)
				 	{
				 		$sql = "INSERT INTO user(firstname,lastname,username,email,password) VALUES ('$fname','$lname','$uname','$email','$pass')";

					 	if($conn->query($sql) == TRUE)
					 	{
					 		//echo "<span style = 'color:green;'>You are registered</span>";
					 		//$_SESSION['username'] = $_POST['username'];

					 		echo "<script>window.location.href='http:/conference/login/signin.php';</script>";
					 	}
					 	else
					 	{
					 		echo "<span style ='color: red;'>SOMETHING WRONG!</span>";
					 	}
			 	    }
			 	    else
				 	{
				 		echo "<span style = 'color:red;'>*password missmatched</span>";
				 	}
			 	}
			 }  

			?>
			
			<input type="password" name="confirmpassword" placeholder="confirm password" required=""><br><br>

			<button>Sign up</button>

			
		</div>
		
         <footer class="footer">
         	<div class="left">
         		<div class="upleft">
         			<p style="color:white; font-size: 50px;">CONFERENCE MANAGEMENT</p>        			
         		</div>         		
         	</div>
         	<p style="color: white; font-size:20px; transform:translate(-34.5%,0%);">Manage all your conferences.</p> 
         	<div class="middle" style="text-align: left;">
         		<p style=""><a href="http:/conference/login/contact_us.php" style="color:white; text-decoration: none;">Contact us</a></p>
         		<p style=""><a href="http:/conference/login/question_outside.php" style="color:white; text-decoration: none;">Question us</a></p>
         		<p style=""><a href="http:/conference/login/about_us.php" style="color:white; text-decoration: none;">About us</a></p>
         		<p style=""><a href="http:/conference/login/news.php" style="color:white; text-decoration: none;">News</a></p>
         		<p style=""><a href="http:/conference/login/faq_outside.php" style="color:white; text-decoration: none;">FAQ</a></p>
         		
         	</div>
         	<div class="right">
         		<a href="https://www.facebook.com/Conference-management-club-712553972436730/?modal=admin_todo_tour" class="fa fa-facebook"></a>
         		<a href="#" class="fa fa-twitter"></a>
         		<a href="#" class="fa fa-instagram"></a>
         		<a href="#" class="fa fa-google"></a>
         	</div>
         	<div class="hr"><hr style="opacity: 0.5" align="middle" width="50%"></div>
         	<div class="last">
         		<div class="link1">
         			<div class="first"><p></p></div>
         			<div class="third"><a style="color:white; text-decoration: none; font-size: 18px;" href="http:/conference/login/privacy_policy.php" >Privacy policy</a></div>
         		</div>
         		

         	</div> 
         	       	
         </footer>
	</form>


</body>
</html>