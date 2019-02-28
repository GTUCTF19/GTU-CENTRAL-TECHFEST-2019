<?php
    define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DB', 'techfest');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
   $error = null;
    session_start();
    
    if(isset($_GET['team_id']))
	{
        $query=mysqli_query($conn,"select * from registration ");
        $row=mysqli_fetch_assoc($query);
        $id=$_GET['team_id'];
        //$status=$_GET['action'];
        
        $uq="update registration SET action=1 WHERE team_id='$id'";
        mysqli_query($conn,$uq);
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=/Admin_panel/team.php">';
	}
?>        

</body>
</html>