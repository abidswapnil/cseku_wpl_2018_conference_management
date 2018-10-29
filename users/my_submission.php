<?php 
 session_start();
require 'config.php';

$username = $_SESSION['username'];
$email = $_SESSION['email']; 

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
		border: 1px solid grey;

	}
	table 
	{
      border-collapse: collapse;
      padding: 8px;

    }

    table, td
    {
        
        padding-top: 30px;
	    padding-bottom: 30px;
	    padding-right: 15px;
	    padding-left: 13px;
	    text-align: left;
	    width: 100%;
	     border: 1px solid grey;

    }
    
    tr:nth-child(even){background-color: #f2f2f2; border: 1px solid grey;}
    tr:nth-child(odd){ border: 1px solid grey;}
    th
    {
    	background-color: #42c2f4;
    	border: 1px solid black;
        padding-top: 12px;
	    padding-bottom: 12px;
	    padding-right: 27px;
	    padding-left: 5px;
	    text-align: left;
	    border: 1px solid grey;
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
	.alert 
	{
	    padding: 20px;
	    background-color:lightblue;
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
	.aware
	{
		padding: 20px;
	    background-color:rgb(0.1,0.3,0.5,0.2);
	    color: red;
	    text-align: center;
	    border:1px solid red;
	    width: 98%;
	    transform: translate(0%,-90%);
	}

</style>
<head>
	<title>my submissions</title>
	<h1 style="font-size: 30px;">My submissions</h1>

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
		</ul><br><br><br><br>
</head>
<body>
	<form method="POST" action="">
		
<?php

    $num_papers = 0;
    $string ="";

   $sql = "SELECT papers.* FROM papers WHERE papers.submitted_by ='$username' AND papers.email ='$email'";

   $result = $conn->query($sql);
   if($result ->num_rows >0)
   {

   	   $i =0;

   	  echo "<table><tr><th>No.</th><th>papers</th><th>submission date</th><th>conference</th><th>title</th><th>author</th><th>abstract</th><th>review</th><th>comment</th><th></th></tr>";
   	  while($row = $result ->fetch_assoc())
   	  {
   	  	 $i++;
         $papers_id[$i] = $row['papers_id'];
   	  	 $papers = $row['papers'];
   	  	 $sub_date = $row['submission_date'];
   	  	 $conference = $row['conferencename'];
   	  	 $title = $row['title'];
   	  	 $author1 = $row['author1'];
   	  	 $author2 = $row['author2'];
   	  	 $author3 = $row['author3'];
   	  	 $author4 = $row['author4'];
   	  	 $author5 = $row['author5'];
   	  	 $abstract = $row['abstract'];
   	  	 $review = $row['review'];
   	  	 $comment = $row['comment'];
   	  	 $con_id[$i] = $row['con_id'];
 
   	  	 if($review == NULL AND $comment == NULL)
   	  	 {
   	  	 	echo "<tr><td>".$i."</td><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$sub_date."</td><td>".$conference."</td><td>".$title."</td><td>".$author1."<br>".$author2."<br>".$author3."<br>".$author4."<br>".$author5."</td><td>".$abstract."</td><td><span style='color:red;'>*still not reviewed</span></td><td><span style='color:red;'>*still not commented</span></td><td><input type='submit' name='show".$i."' value='all review'><br><br><input type='submit' name='delete".$i."' value='delete paper'></td></tr>";
   	  	 }
   	  	 else
   	  	 {
   	  	 	echo "<tr><td>".$i."</td><td><a href='http:/conference/uploads/uploads1/".$papers."'>".$papers."</a></td><td>".$sub_date."</td><td>".$conference."</td><td>".$title."</td><td>".$author1."<br>".$author2."<br>".$author3."<br>".$author4."<br>".$author5."</td><td>".$abstract."</td><td>".$review."</td><td>".$comment."</td><td><input type='submit' name='show".$i."' value='all review'><br><br><input type='submit' name='delete".$i."' value='delete paper'></td></tr>";	

   	  	 }

   	  	 

   	  }
   	  echo "</table>";
   	  //echo "string";

   	  $num_papers =$i;
   }
   for($i=1 ;$i<=$num_papers; $i++)
   {
   	  $show_btn ='show'.$i;
   	  $delete_btn='delete'.$i;

  		if(isset($_POST[$show_btn]))
		{
			//echo "string";
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
				    $con_id = $row['con_id'];

				    $_SESSION['papers_id'] = $id;
				    $_SESSION['papers'] = $papers;
				    $_SESSION['submission_date'] = $sub_date;
				    $_SESSION['submitted_by'] = $sub_by;
				    $_SESSION['conferencename'] = $conference;
				    $_SESSION['title'] = $title;
				    $_SESSION['author'] = $author;
				    $_SESSION['email'] = $email;
				    $_SESSION['abstract'] = $abstract;
				    $_SESSION['con_id'] = $con_id;

				    echo "<script>window.location.href='http:/conference/users/show_all_review.php'</script>";
				    //echo "".$id;


				}
				/*echo "papers id: ".$id."<br>";
				echo "papers: ".$papers."<br>";
				echo "submission date: ".$sub_date."<br>";
				echo "submitted by: ".$sub_by."<br>";
				echo "conference name: ".$conference."<br>";
				echo "author: ".$author."<br>";
				echo "email: ".$email."<br>";
				echo "abstract: ".$abstract;*/
			}
			
		}
		if(isset($_POST[$delete_btn]))
		{
			$selected_id = $papers_id[$i];

			$sql ="DELETE FROM papers WHERE papers.papers_id='$selected_id'";
			$sql1 = "DELETE FROM reviewer WHERE reviewer.papers_id='$selected_id'";

			if($conn->query($sql) == TRUE AND $conn->query($sql1) == TRUE)
			{
				echo "<script>window.location.href='http:/conference/users/my_submission.php';</script>";
			}
			else
			{
				echo "string";
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
		

	</form>

</body>
</html>