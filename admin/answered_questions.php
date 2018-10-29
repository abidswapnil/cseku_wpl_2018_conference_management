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
	table 
	{
      border-collapse: collapse;
      padding: 8px;
      transform: translate(0%,0%);

    }

    table, td
    {
        
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 20px;
	    padding-left: 40px;
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
	    padding-right: 180px;
	    padding-left: 154px;
	    text-align: center;
    }
    .question
    {
    	padding: 20px;
    	padding-top: 70px;
    	padding-bottom: 50px;
	    background-color:#8fc1b7;
	    text-align: center;
	    width: 98%;
	    height: 100%;
	    transform: translate(0%,0%);
    }
    .success
    {
    	padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid #5daf3f;
	    width: 98%;
	    transform: translate(0%,-935%);

    }
    .alert
    {
        padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 98%;
	    transform: translate(0%,-935%);

    }
    .closebtn
	{
	    margin-left: 15px;
	    color: white;
	    font-weight: bold;
	    float: right;
	    font-size: 32px;
	    line-height: 20px;
	    cursor: pointer;
	    transition: 0.3s;
	}
	.closebtn:hover
	{
	    color: black;
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



</ul><br><br>

<div class="question">

	<?php 
        
        require 'config.php';
        session_start();

           $num_questions =0;
           $q_id = array();


            $sql= "SELECT deleted_questions.* FROM deleted_questions";

            $result = $conn->query($sql);

            if($result->num_rows > 0)
            {
            	$i=0;

            	echo "<table><tr><th>Question</th><th>answer</th><th>asker</th><th>email</th><th><span style='color:red;'>delete?</span></th></tr>";

            	while($row = $result->fetch_assoc())
            	{
            		$i++;
                    $id[$i] = $row['q_id'];
            		$question = $row['question'];
            		$answer = $row['answer'];
            		$asker = $row['asker'];
            		$email = $row['email'];
            		//$q_status = $row['q_status'];


            		
            	   echo "<tr><td>".$i."."." ".$question."</td><td>".$answer."</td><td>".$asker."</td><td>".$email."</td><td><span style='color:green'; >*answered</span>"." "."<input type='submit' name='delete".$i."' value='delete' style='height:30px; width:100px; padding:2px; margin:0px; background-color:#e04c4c; transform:translate(0%,0%)'></td></tr>";


            	}
            	
            	echo "</table>";

            	$num_questions= $i;

            	
            }
            else
            {
            	echo "<h2 style='text-align:center';>No question!</h2><h3><a href=''>see answered question</a></h3>";
            	
            }


            for($i = 1; $i <= $num_questions; $i++)
            {
            	$submit_btn ='submit'.$i;
            	$delete_btn ='delete'.$i;
 
            	if(isset($_POST[$submit_btn]))
            	{
            		$selecte_id = $id[$i];
            		

            		if(isset($_POST['answer'.$i]))
            		{
            			$answer =$_POST['answer'.$i];

            			if($answer == NULL)
            			{
            				return 0;
            			}
            			else
            			{
            				$sql = "UPDATE questions
            				        SET questions.answer ='$answer',
            				            questions.q_status ='1'
            				      WHERE questions.q_id = '$selecte_id'";

            				if($conn->query($sql) == TRUE)
            				{
            
								echo "<script>window.location.href ='http:/conference/admin/question.php';</script>";

            				}      
            			}
            		}
            	}
            	if(isset($_POST[$delete_btn]))
            	{
            		$selecte_id = $id[$i];

            		$sql ="DELETE FROM questions WHERE questions.q_id = '$selecte_id'";

            		if($conn->query($sql) == TRUE)
            		{
            			echo "<script>window.location.href ='http:/conference/admin/question.php';</script>";

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

</body>
</html>