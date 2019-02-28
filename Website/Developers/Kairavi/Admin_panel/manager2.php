<html>
<head>
<title>ctf19</title>
</head>
<body>
<?php
$name=$_POST['name'];
$phone=$_POST['phone'];
$main=$_POST['mainevent'];
$sub=$_POST['subevent'];

$con=mysql_connect("localhost","root","") or die ("Could not connect Database");
	mysql_select_db("ctf19",$con);
$sql=mysql_query("INSERT INTO manager(name,phone,mainevent,subevent) VALUES ('$name','$phone','$main','$sub')");
		if($sql)
		{
			include('thankyou.php');
		}
		else
		{
include('manager.php');
	}
?>
  <br><br>  
<br><br><br><br>  
<br><bR>
<br><br>
	</form>
</body>
</html>		