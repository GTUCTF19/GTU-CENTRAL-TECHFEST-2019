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
        $query=mysqli_query($conn,"select * from volunteer ");
        $row=mysqli_fetch_assoc($query);
        $id=$_GET['id'];
        //$status=$_GET['action'];
        
        $uq="update volunteer SET action=1 WHERE id='$id'";
        mysqli_query($conn,$uq);
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=/Admin_panel/volunteer_detail.php">';
	}
?>        

</body>
</html>