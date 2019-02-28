<?php
   define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DB', 'techfest');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
   
   session_start();
   
   $user_check = $_SESSION['login_user'];
   $ses_sql = mysqli_query($conn,"select u_name from admin_pannel where u_name = '$user_check';");
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   if(!isset($_SESSION['login_user'])){
      header("location:test.php");
      die();
   }
?>