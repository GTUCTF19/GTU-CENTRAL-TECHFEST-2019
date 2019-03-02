<html>
<body>
<?php
    define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DB', 'techfest');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
   $error = null;
    session_start();
	

if(isset($_GET['id']))
{
    $id=$_GET['id'];
    $sql="delete from registration where id='$id'";
    $query1=mysqli_query($conn,$sql);
    if($query1)
    {
        header('location:team.php');
    }
    else
    {
        mysqli_error().query1;
    }
}

?>
</body>
</html>