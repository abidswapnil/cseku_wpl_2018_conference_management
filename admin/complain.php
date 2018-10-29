<!DOCTYPE html>
<html>
<head>
	<title>admin | complain</title>
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
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table, td
    {
        border: 2px solid grey;
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 0px;
	    padding-left: 25px;
	    text-align: left;
	    width: 100%;
    }
    
    tr:nth-child(even){background-color: #f2f2f2;}
    tr:nth-child(odd){background-color: #f2f2f2;}
    th
    {
    	background-color: #42c2f4;
    	border: 2px solid grey;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 130px;
	    padding-left: 104px;
	    text-align: center;
    }

	</style>
</head>
<body>
	<form method="" action="POST">
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



</ul><br><br>
       <?php 
        
        require 'config.php';
        session_start();

            $sql= "SELECT questions.* FROM questions";

            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
            	echo "<table><tr><th>Complain</th><th>Email</th></tr>";

            	while($row = $result->fetch_assoc())
            	{
            		$complain = $row['complain'];
            		$email = $row['email'];

            		echo "<tr><td>".$complain."</td><td><a href=''>".$email."</a></td></tr>";
            	}
            }





        ?>


		

	</form>

</body>
</html>