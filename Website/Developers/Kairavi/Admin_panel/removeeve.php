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
	

if(isset($_GET['m_id']))
{
    $id=$_GET['m_id'];
    $sql="delete from manager where m_id='$id'";
    $query1=mysqli_query($conn,$sql);
    if($query1)
    {
        header('location:view_event.php');
    }
    else
    {
        mysqli_error().query1;
    }
}

?>
</body>
</html>