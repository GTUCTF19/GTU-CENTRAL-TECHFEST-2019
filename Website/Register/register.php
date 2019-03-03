<?php
	$db_host = "127.0.0.1";
   $db_user = "root";
   $db_password = "";
   $db_name = "techfest";
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
   // check connection
  $temp[] = null;
  $no = 0;
   if(!$conn)
   {
      die("Not Connected" .mysqli_connect_error());
   }
    $sql = "SELECT * FROM department";
   $result = mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0)
   {
   		  while($row = mysqli_fetch_assoc($result)){
          $no ++;
   		  		$temp[$no] = $row["d_name"];
   		  		

   		  }
       echo json_encode($temp);

   }

  
?>