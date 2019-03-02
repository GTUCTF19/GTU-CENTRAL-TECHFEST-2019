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

   if(isset($_POST['login'])) 
   {
       $mevent=$_POST['events'];
       $sevents=$_POST['subevent'];
       $abs=$_POST['abstract'];
       $rules=$_POST['rules'];
       $fees=$_POST['fees'];
       $minmem=$_POST['min_members'];
       $maxmem=$_POST['max_members'];
       $scope=$_POST['scope'];
       
       
       function is_inserted($str)
       {

           if($str=="true")
			{
			 ?>
			 <script>
			 window.onload=function()
             {
				//alert('Done !!!');
				window.location="event_form.php;
             }
                </script>
                <?php
			 }
            else
			 {
				?>
				<script>
				window.onload=function()
				{
					//alert('Error !!!');
					window.location="event_form.php";
				}
				</script>
				<?php
			}
       }
       
        if($mevent=="tech")
       {
           $ins_query = "insert into tech(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
       }
       
       if($mevent=="non_tech")
       {
           $ins_query = "insert into non_tech(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
       }
       
       if($mevent=="robotics")
       {
           $ins_query = "insert into robotics(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
       }
       
       if($mevent=="workshop")
       {
           $ins_query = "insert into workshop(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
       }

       if($mevent=="atv")
       {
           $ins_query = "insert into atv(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
       }
       
       if($mevent=="entresum")
       {
           $ins_query = "insert into entresum(e_name,abstract,rules,fees, min_members,max_members,scope) values('$sevents','$abs','$rules','$fees','$minmem','$maxmem','$scope')";
          
			$ins2_query=mysqli_query($conn,$ins_query);	
            is_inserted($ins2_query);
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
    <title>Event form</title>
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

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
    
    <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers2/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select3/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->

    <SCRIPT language=Javascript>
      
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      
   </SCRIPT>
    
    <script src="//cdn.ckeditor.com/4.11.3/basic/ckeditor.js"></script>
    
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
                        <li class="active has-sub">
                            <a class="active  js-arrow" href="index.html">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
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
                        <li class="active has-sub">
                            <a class="active js-arrow" href="#">
                                <i class="fas fa-tachometer-alt"></i>EVENT FORM</a>
                        </li>
                        
                        
                         <li>
                            <a href="view_event.php">
                                <i class="fa fa-sign-out fa-fw"></i>VIEW EVENT</a>
                        </li>
                        
                         <li>
                            <a href="manager_details.php">
                                <i class="fa fa-sign-out fa-fw"></i>MANAGER DETAILS</a>
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
              <div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post">
					<span class="login100-form-title p-b-26">
                        <h1>Event form</h1>
					</span>
					<br>
                    <p>Main event name</p><br>
                    <select name="events">
                        <option value="tech">Technical</option>
                        <option value="non_tech">Non-Technical</option>
                        <option value="entresum">Entresum</option>
                        <option value="workshop">Workshop</option>
                        <option value="atv">ATV</option>
                        <option value="robotics">Robotics</option>
                    </select>
                    <br><br>
                    
					<div class="wrap-input100" >
						<input class="input100" type="text" name="subevent" required>
						<span class="focus-input100" data-placeholder="Sub-event name"></span>
					</div>
                    
					<div class="wrap-input100">
						<input class="input100" type="text" name="abstract" required>
						<span class="focus-input100" data-placeholder="Event abstract"></span>
					</div>
                    
                    <p>Event rules</p> <br>
                    
                    <textarea cols="58" rows="5" placeholder="Rules" style="text-align: left" name="rules" id="rules">
                    </textarea>
                   
                    <br><br>
                    
                    <div class="wrap-input100">
						<span class="btn-show-pass">
						</span>
						<input class="input100" onkeypress="return isNumberKey(event)" type="text" name="fees" required>
						<span class="focus-input100" data-placeholder="Event fees"></span>
					</div>
                    
                    <div class="wrap-input100">
						<span class="btn-show-pass">
						</span>
						<input class="input100" onkeypress="return isNumberKey(event)" type="text" name="min_members" required>
						<span class="focus-input100" data-placeholder="Minimum members"></span>
					</div>
                    
                     <div class="wrap-input100">
						<span class="btn-show-pass">
						</span>
						<input class="input100" onkeypress="return isNumberKey(event)" type="text" name="max_members" required>
						<span class="focus-input100" data-placeholder="Maximum members"></span>
					</div>
                    
                     <div class="wrap-input100">
						<span class="btn-show-pass">
						</span>
						<input class="input100" onkeypress="return isNumberKey(event)" type="text" name="scope" required>
						<span class="focus-input100" data-placeholder="Maximum team scope"></span>
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<input type="submit" name="login" value="SUBMIT" class="login100-form-btn">
								
						</div>
					</div>
				</form>
                
                <script>
                        CKEDITOR.replace( 'rules' );
                </script>
			</div>
		</div>
	</div>
                  <script src="vendor/jquery2/jquery-3.2.1.min.js"></script>
                  <script src="js2/main2.js"></script>
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
    <!-- Vendor JS -->
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
