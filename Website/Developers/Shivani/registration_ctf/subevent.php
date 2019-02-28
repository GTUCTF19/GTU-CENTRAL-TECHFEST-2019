<?php
$db_host = "127.0.0.1";
   $db_user = "root";
   $db_password = "";
   $db_name = "techfest";
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
  
if(isset($_POST['eventName']))
    {
         $event = $_POST['eventName'];
         echo $event;
        

        
  }
?>