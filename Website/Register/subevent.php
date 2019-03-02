<?php
$db_host = "localhost";
   $db_user = "root";
   $db_password = "";
   $db_name = "techfest";
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
 $temp[] = null;
  $no = 0; 

if(isset($_POST['eventName']))
    {
         $event = $_POST['eventName'];
                 strtolower($event);

         $sql = "SELECT * from  ".$event."" ;
         $result = mysqli_query($conn,$sql);

         $number = mysqli_num_rows($result);
             if ($number > 0){
   		  		while($row = mysqli_fetch_assoc($result)){
					 $no ++;
   		  		$temp[$no] = $row["e_name"];
   		     		  		

		   		}

		   		echo json_encode($temp);
			}
		}
?>