<?php
define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DB', 'techfest');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
   $error = null;
    session_start();
   
if(isset($_POST['submit'])) 
{
    $name=$_POST['name'];
    $phone=$_POST['phone'];
    $event=$_POST['event'];

    $ins_query = "insert into manager (name,phone,event) values ('$name','$phone','$event')";
    $ins2_query=mysqli_query($conn,$ins_query);	
   
	if(ins2_query==true)
	{
       //header("location:volunteer.php");
        ?>
				<script>
				window.onload=function()
				{
					alert('Registration successful !!!');
					window.location="manager.php";
				}
				</script>
				<?php
       	
	}
	else
	{
      // header("location:volunteer.php");
        ?>
				<script>
				window.onload=function()
				{
					//alert('Error !!!');
					window.location="manager.php";
				}
				</script>
				<?php
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Manager</title>

    <!-- Fontfaces CSS-->
    <link href="css/font-face.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="css/theme.css" rel="stylesheet" media="all">
    <style media="screen">

    </style>
    
    
     <SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
   </SCRIPT>
</head>

<body class="animsition" >
    <div class="page-wrapper "  >
        <div class="page-content--bge5" style="background-color: linear-gradient(45deg,gray,black);">
            <div class="container">
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="#">
                                <h1>Manager</h1>
                            </a>
                        </div>
                        <div class="login-form">
                            <form method="post">
                                <div class="form-group">
                                    <label>Name:</label>
                                    <input class="form-control" type="name" name="name" placeholder="Name">
                                </div>
								<div class="form-group">
                                    <label>Phone no: </label>
                                    <input class="form-control" type="no" name="phone" placeholder="Phone No" onkeypress="return isNumberKey(event)" pattern="[7-9]{1}[0-9]{9}">
                                </div>
									
                               <div class="form-group">
   							<label for="eventselect">SELECT EVENT</label>
						   <select name="event">
                        <option value="TECH">Technical</option>
                        <option value="NONTECH">Non-Technical</option>
                        <option value="ENSM">Entresum</option>
                        <option value="WKSP">Workshop</option>
                        <option value="ATV">ATV</option>
                        <option value="ROBO">Robotics</option>
                        </select>
						</div>
                                </div>
				  <input name="submit" class="au-btn au-btn--block btn-primary m-b-20" type="submit" value="REGISTER">
						</div>
						<br><br> 	
                              

                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->
