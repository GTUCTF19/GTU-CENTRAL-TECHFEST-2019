<?php
	define('SERVER', 'localhost');
   define('USERNAME', 'root');
   define('PASSWORD', '');
   define('DB', 'techfest');
   $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
   $error = null;
    session_start();

   if(!isset($_SESSION['log']))
	{
	?>
    <script>
		window.location="login.php";
	</script>
    <?php
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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


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
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            GTU ctf 19
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="event_form.php">
                                <i class="fa fa-sign-out fa-fw"></i>EVENT DETAILS</a>
                        </li>
                        <li class="active has-sub">
                            <a class="active js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>TEAM DETAILS</a>
                            </li>
                        <li>
                            <a href="lg.php">
                                <i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>

                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="#">
                    <h2>GTU CTF' 19<h2>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="event_form.php">
                                <i class="fa fa-sign-out fa-fw"></i>EVENT FORM</a>
                        </li>
                                            
                        <li class="active has-sub">
                            <a class="active js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>MANAGER DETAILS</a>
                            </li>
                        
                        <li>
                            <a href="volunteer_detail.php">
                                <i class="fa fa-sign-out fa-fw"></i>VOLUNTEER DETAILS</a>
                        </li>
                        
                         <li>
                            <a href="team.php">
                                <i class="fa fa-sign-out fa-fw"></i>TEAM DETAILS</a>
                        </li>
                        
                        <li>
                            <a href="lg.php">
                                <i class="fa fa-sign-out fa-fw"></i>Logout</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                          <form class="form-header" action="" method="POST">

                          </form>
                            <div class="header-button">

                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">Admin Name</a>
                                                    </h5>
                                                    <span class="email">abc@example.com</span>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__body">
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-account"></i>Account</a>
                                                </div>
                                                <div class="account-dropdown__item">
                                                    <a href="#">
                                                        <i class="zmdi zmdi-settings"></i>Setting</a>
                                                </div>
                                            </div>
                                            <div class="account-dropdown__footer">
                                                <a href="Login.html">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>
            <!-- HEADER DESKTOP-->
              
            <!-- MAIN CONTENT-->
            <div class="main-content">
              <div class="container">
              <h3 style="text-align:center">MANAGER DETAILS</h3><br>
		<center><table border="1" height="30" cellpadding='20' cellspacing='20'>
		<col width="200">
        <col width="200">
        <col width="200">
        <col width="200">
        <col width="200">
		<th><center><font  size='4' >Manager Id</font></center></th>
		<th><center><font  size='4'>Manager Name</font></center></th>
		<th><center><font  size='4'>Phone no.</font></center></th>
        <th><center><font  size='4'>Status</font></center></th>
        <th colspan=2><center><font  size='4'>Action</font></center></th>
        </tr>
       
        <?php
	
        $disp=mysqli_query($conn,"select * from manager");
			
	   while($row=mysqli_fetch_array($disp))
			{
				echo "<tr>";
				echo "<td><center><font  size='4' >".$row['id']."</font></center></td>";
				echo "<td><center><font  size='4' >".$row['name']."</font></center></td>";
				echo "<td><center><font  size='4' >".$row['phone']."</font></center></td>";
                echo "<td><center><font  size='4' >".$row['action']."</font></center></td>";
                echo "<td><center><a href='apman.php?id=".$row['id']."'><img src='images/approve.png' height='30' width='30'></a>"; echo "  "; echo" <a href='removeman.php?id=".$row['id']."'><img src='images/cross.png' height='25' width='25'></a></center></td>";
				echo "</tr>";
			} ?>
			
            </table>
                  </center>
              </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
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
