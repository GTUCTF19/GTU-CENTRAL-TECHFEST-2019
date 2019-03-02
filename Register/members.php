<?php
$db_host = "localhost";
   $db_user = "root";
   $db_password = "";
   $db_name = "techfest";
    $conn = mysqli_connect($db_host,$db_user,$db_password,$db_name);
 $temp[] = null;

  $no = 0; 


if(isset($_POST['eventname']) && isset($_POST['subeventname']))
    {
         $event = $_POST['eventname'];
                 strtolower($event);
         $subevent = $_POST['subeventname'];

          $sql = "SELECT * from  ".$event." WHERE e_name = '".$subevent."'" ;
         $result = mysqli_query($conn,$sql);

         $number = mysqli_num_rows($result);
             if ($number > 0){
            while($row = mysqli_fetch_assoc($result)){

            $i=$row['min_members'];
            while($i<=$row['max_members'])
            {
              $no ++;
              $temp[$no] = $i;
           
              $i++;
            }

            

        }

                    echo json_encode($temp);



      }
    }
?>