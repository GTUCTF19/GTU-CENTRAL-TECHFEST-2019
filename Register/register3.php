<?php
	$v_id = $_POST['volunteerid'];
	//echo $v_id;
	$team_name = $_POST['teamName'];
	//echo $team_name;
	session_start();
  	if(isset($_SESSION["eventName"]) && isset($_SESSION["subEventName"]) && isset($_SESSION["members"]) && isset($_SESSION["fees"])){

      	$members = $_SESSION['members'];
      	//echo $members;
      	$fees = $_SESSION['fees']/$members;
      	//echo $fees;
      	$eventName = $_SESSION['eventName'];
      	//echo $eventName;
      	$subEventName = $_SESSION['subEventName'];
      	//echo $subEventName;

	}

	$db_host = "localhost";
   	$db_user = "root";
   	$db_password = "";
   	$db_name = "techfest";
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
    $sql = "SELECT * from  ".$eventName." WHERE e_name = '".$subEventName."'" ;
    $result = mysqli_query($conn,$sql);

    $number = mysqli_num_rows($result);
    if ($number > 0){
    while($row = mysqli_fetch_assoc($result)){

        $e_id = $row['e_id'];
        //echo $e_id;
    	}    
    }

    for ($i=1 ; $i<=$members ; $i++){

		$firstName = $_POST['firstName'.$i];
    	//echo $firstName;
    	$lastName = $_POST['lastName'.$i];
    	//echo $lastName;
    	$enroll = $_POST['enroll'.$i];
    	//echo $enroll;
    	$email = $_POST['email'.$i];
    	//echo $email;
    	$phone = $_POST['phone'.$i];
    	//echo $phone;
    	$college = $_POST['college'.$i];
    	//echo $college;
    	$gender = $_POST['gender'.$i];
    	//echo $gender;
    	$db_host = "localhost";
	   	$db_user = "root";
	   	$db_password = "";
	   	$db_name = "techfest";

	   	if($i > 1)
	   	{
    
	    	$query = "INSERT INTO registration (firstName,lastName,email,phone,college,enroll,gender,team_name,fees,e_id,no_tmember,v_id) VALUES('$firstName','$lastName','$email','$phone','$college','$enroll','$gender','$team_name','$fees','$e_id','$members','$v_id')";
	    	if($conn->query($query) === TRUE)
			{
				//echo "New Record inserted Successfully";
			}
			else
			{
				    //echo "Error: " . $query . "<br>" . $conn->error;

			}
		}
		else
		{
			$team_leader = 1;
			$query = "INSERT INTO registration (firstName,lastName,email,phone,college,enroll,gender,team_leader,team_name,fees,e_id,no_tmember,v_id) VALUES('$firstName','$lastName','$email','$phone','$college','$enroll','$gender','$team_leader','$team_name','$fees','$e_id','$members','$v_id')";
	    	if($conn->query($query) === TRUE)
			{
				//echo "New Record inserted Successfully";
			}
			else
			{
				    //echo "Error: " . $query . "<br>" . $conn->error;

			}	
		}
	}
        


?>