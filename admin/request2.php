<?php
	session_start();
	require 'config.php';

	$num_notifications = 0;
	$notifications_id = array();
	$string = "";
	$username = $_SESSION['username'];
	$email = $_SESSION['email'];


	$sql = "SELECT conferences.* 
            FROM conferences 
            WHERE conferences.status IS NULL";
    $result = $conn->query($sql);

    
    if($result ->num_rows >0)
    {
      $i = 0;

    	
      while($row = $result->fetch_assoc())
      {
        $i++;

        //$id = $row['con_id'];
        $notifications_id[$i] = $row['con_id'];
        $name = $row['conferencename'];
        $date = $row['date'];
        $start = $row['starttime'];
        $end = $row['endtime'];
        $venue = $row['venue'];
        $room = $row['conferenceroom'];
        $description = $row['description'];
        $status = $row['status'];

        $string .= $notifications_id[$i].". ";
        $string .= "name: ".$name."; "." ";
        $string .= "date: ".$date."; "." ";
        $string .= "start :".$start."; "." ";
        $string .= "end: ".$end."; "." ";
        $string .= "venue: ".$venue."; "." ";
        $string .= "room: ".$room."; "." ";
        $string .= "description: ".$description."<br><br>";

        $string .= "<input type='submit' name ='approve".$i."' style='height:30px; width:60px; padding:2px; margin:2px; background-color:green;' value ='approve'></input>"." ";

        $string .= "<input type='submit' name ='discard".$i."' style='height:30px; width:60px; padding:2px; margin:2px; background-color:red;' value ='discard'></input>";

        $string .= "<hr>";
        
	   }
	      
	      //$notifications = $i;
	      //session_start();
	      $num_notifications = $i;
	}


	for($i = 1; $i <= $num_notifications; $i++)
	{
	  //echo "id:"." ".$id[$i]." ";
	  $approved_btn = 'approve'.$i;
	  $discard_btn = 'discard'.$i;
	  $email = $_SESSION['email'];

	  if (isset($_POST[$approved_btn])) {
	  	$selected_id = $notifications_id[$i];

	    $sql = "UPDATE conferences 
	            SET conferences.status=1,
	                conferences.manager_status = 1 ,
	                conferences.email = '$email'
	            WHERE conferences.con_id='$selected_id'";
	    $result = $conn->query($sql);

	    /*$sql1 = "UPDATE member
                 SET member.manager_status =1 ,
                     member.conferencename='$name'
                     WHERE member.email = '$email'";

        $result1 = $conn->query($sql1);*/

        $sql3 = "SELECT conferences.* 
            FROM conferences WHERE conferences.status='1' AND conferences.con_id='$selected_id'";
        
        $result3 = $conn->query($sql3);

        if($result3 ->num_rows >0)
        {
        	while($row = $result3->fetch_assoc())
        	{
        		$name = $row['conferencename'];
		        $date = $row['date'];
		        $start = $row['starttime'];
		        $end = $row['endtime'];
		        $venue = $row['venue'];
		        $room = $row['conferenceroom'];
		        $description = $row['description'];
		        //$status = $row['status'];

        	}
        	$sql4 = "INSERT INTO notifications (conferencename,date,starttime,endtime,venue,conferenceroom,description,status,username) VALUES('$name','$date','$start','$end','$venue','$room','$description','1','$username')";

            $result4 = $conn->query($sql3);

            if($conn->query($sql4) == FALSE)
		    {
		    	echo "Error insertintg record:". $conn->error;
		    }

        }
        
	    if ($conn->query($sql) === FALSE) {
	      echo "Error updating record: " . $conn->error;
	    }
	    //echo "approved=".$selected_id;

	    
	    header("location: request.php");
	  }
	  elseif (isset($_POST[$discard_btn])) {

	  	$selected_id = $notifications_id[$i];

	    $sql = "UPDATE conferences 
	            SET conferences.status=0 ,
	                conferences.manager_status=0,
	                conferences.email = '$email'
	          WHERE conferences.con_id='$selected_id';";
	    $result = $conn->query($sql);

	    $sql1 = "SELECT conferences.* 
            FROM conferences WHERE conferences.status='0' AND conferences.con_id='$selected_id'";
        
        $result1 = $conn->query($sql1);

        if($result1 ->num_rows >0)
        {
        	while($row= $result1->fetch_assoc())
        	{
        		$name = $row['conferencename'];
		        $date = $row['date'];
		        $start = $row['starttime'];
		        $end = $row['endtime'];
		        $venue = $row['venue'];
		        $room = $row['conferenceroom'];
		        $description = $row['description'];
		       // $status = $row['status'];

        	}
        	$sql2 = "INSERT INTO notifications (conferencename,date,starttime,endtime,venue,conferenceroom,description,status,username) VALUES('$name','$date','$start','$end','$venue','$room','$description','0','$username')";

            $result2 = $conn->query($sql2);

            if($conn->query($sql4) == FALSE)
		    {
		    	echo "Error insertintg record:". $conn->error;
		    }

        }
	    
	    if ($conn->query($sql) === FALSE) {
	      echo "Error updating record: " . $conn->error;
	    }
	    //echo "reject=".$selected_id;
	    header("location: request.php");
	  }
	}
?>