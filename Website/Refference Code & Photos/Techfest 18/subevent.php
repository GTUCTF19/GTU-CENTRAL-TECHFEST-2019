<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style3.css">

<link rel="stylesheet" href="css/bootstrap.min.css">
<link rel="stylesheet" href="css/font-awesome.min.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/temp.css">
<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body>


   <div class="navbar navbar-fixed-top custom-navbar navbar2" role="navigation">
   

    <!-- navbar header -->
    <div class="navbar-header">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
        <span class="icon icon-bar"></span>
      </button>
      <a href="" class="navbar-brand">
        <img src="images/TF 18 Logo.png" style="position: fixed;overflow: hidden!important;  top: 1%; bottom:1%;left: 1%; width: 13%;margin-bottom: 5px !important;"></img></a>
    </div>

    <div class="collapse navbar-collapse">

      <ul class="nav navbar-nav navbar-right navbar-pills text-center">
        <li><a href="#Xintro" >Home</a></li>
        <li><a href="#Xoverview" >Overview</a></li>
        
        <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown"  data-hover="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                Events <span class="caret"></span></a>
        
           <ul class="dropdown-menu bounceIn multi-level text-center" data-dropdown-in="bounceIn" data-dropdown-out="bounceOut" role="menu" aria-labelledby="dropdownMenu">
              
              <li class="dropdown-submenu">
                <a href="#">Tech</a>
                <?php $dept='tech'?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Computer</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eventname="C quiz and CryptoHunt"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">C quiz and CryptoHunt</a>';?></li>
                        <li><?php $eventname="Code-less"; echo'<a href="subevent.php?dep='.$dept.'&eventname='.$eventname.'">Code-less</a>';?></li>
                        <li><?php $eve="Relay Coding"; echo'<a href="subevent.php?dep='.$dept.'&eve='.$eve.'">Relay Coding</a>';?></li>
                        <li><?php $eve="WebWeaver"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">WebWeaver</a>';?></li>
                        <li><?php $eve="Photoshop-FACEOFF"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Photoshop-FACEOFF</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Civil</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hola Bridge"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                        <li><?php $eve="Plantastic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Plantastic</a>';?>
                        </li>
                        <li><?php $eve="Civil Brainiacs"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Civil Brainiacs</a>';?></li>
                        <li><?php $eve="Eagle Eye"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Eagle Eye</a>';?></li>
                        <li><?php $eve="Traffica"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Traffica</a>';?></li>
                        <li><?php $eve="Spile"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Spile</a>';?></li>
                        <li><?php $eve="Game Of Gravity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Game Of Gravity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Chamical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Hunt It Up"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hunt It Up</a>';?></li>
                        <li><?php $eve="Canon Wars"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Canon Wars</a>';?></li>
                        <li><?php $eve="Sod-i-Atic Car"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Sod-i-Atic Car</a>';?></li>
                        <li><?php $eve="Chem-o-live "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-live</a>';?></li>
                        <li><?php $eve="Chem-o-Click"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chem-o-Click</a>';?></li>
                        <li><?php $eve="Poster Presentation"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Poster Presentation</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Electrical</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Electric-o-buzz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Electric-o-buzz</a>';?></li>
                        <li><?php $eve="Gate-o-Tarka"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Gate-o-Tarka</a>';?></li>
                        <li><<?php $eve="Decode, Recode, Encode"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Decode, Recode, Encode</a>';?></li>
                        <li><?php $eve="Think Big"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Think Big</a>';?></li>
                        <li><?php $eve="Circuit Chakravyuh"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Circuit Chakravyuh</a>';?></li>
                        <li><?php $eve="Waste 2 Shreshtha"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Waste 2 Shreshtha</a>';?></li>
                        <li><?php $eve="Use solar - save nature"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Use solar - save nature</a>';?></li>
                        <li><?php $eve="Witricity"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Witricity</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">General and Management</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Maths Treasurhunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Maths Treasurhunt</a>';?></li>
                        <li><?php $eve="Mock Interview"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Interview</a>';?></li>
                        <li><?php $eve="Entrepreneurs'de ck"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Entrepreneurs deck</a>';?></li>
                        <li><?php $eve="Corpo Quiz"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Corpo Quiz</a>';?></li>
                        <li><?php $eve="Mad-Ads"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mad-Ads</a>';?></li>
                        <li><?php $eve="Cash Flow"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Cash Flow</a>';?></li>
                        <li><?php $eve="GRAM UDAY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">GRAM UDAY</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Mechanical</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="HYDRAULIC ARM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDRAULIC ARM</a>';?></li>
                        <li><?php $eve="CAD ISTIC"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CAD ISTIC</a>';?></li>
                        <li><?php $eve="Mecha Treasure Hunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mecha Treasure Hunt</a>';?></li>
                        <li><?php $eve="Chain Reaction ? Falling Dominoes?"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Chain Reaction ? Falling Dominoes?</a>';?></li>
                        <li><?php $eve="AUTO PSY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">AUTO PSY</a>';?></li>
                        <li><?php $eve="Junkyard"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Junkyard</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">NonTech</a>
                <?php $dept='nontech';?>
                <ul class="dropdown-menu" style="padding: 0;;">
                  <li class="dropdown-submenu">
                    <a href="#">Fun Events</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="1 minute Game"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">1 minute Game</a>';?></li>
                        <li><?php $eve="SelfieHolic"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">SelfieHolic</a>';?></li>
                        <li><?php $eve="Slow Cycling"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Slow Cycling</a>';?></li>
                        <li><?php $eve="Paint IT Out"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint IT Out</a>';?></li>
                        <li><?php $eve="Distraction"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Distraction</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Fluency</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Story up "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Story up </a>';?></li>
                        <li><?php $eve="Mock Parliament"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mock Parliament</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu">
                    <a href="#">Gaming</a>
                    <ul class="dropdown-menu" style="padding: 0;">
                        <li><?php $eve="Live Ludo"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Live Ludo</a>';?></li>
                        <li><?php $eve="Mini Militia"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Mini Militia</a>';?></li>
                        <li><?php $eve="Counter Strike"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Counter Strike</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">Adventure Events</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="Being Sherlock"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Being Sherlock</a>';?></li>
                        <li><?php $eve="Hurdles & Twister"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hurdles & Twister</a>';?></li>
                        <li><?php $eve="Tug of war"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Tug of war</a>';?></li>
                        <li><?php $eve="HumanCaterpillar"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HumanCaterpillar</a>';?></li>
                        <li><?php $eve="Paint War"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Paint War</a>';?></li>
                        <li><?php $eve="Run Rotate Run"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Run Rotate Run</a>';?></li>
                    </ul>
                  </li>
                  <li class="dropdown-submenu" style="padding: 0;">
                    <a href="#">English-Vinglish</a>
                    <ul class="dropdown-menu" style="padding: 0;;">
                        <li><?php $eve="CineJam"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">CineJam</a>';?></li>
                        <li><?php $eve="NERD Quiz "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">NERD Quiz </a>';?></li>
                        <li><?php $eve="Catapult"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Catapult</a>';?></li>
                        <li><?php $eve="C quiz And CryptoHunt"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">Hola Bridge</a>';?></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Robotics</a>
                <?php $dept='robotics'?>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><?php $eve="MAZE HUNTERS "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">MAZE HUNTERS </a>';?></li>
                  <li><?php $eve="RO-VENTURE"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">RO-VENTURE</a>';?></li>
                  <li><?php $eve="ARMAGEDDON "; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">ARMAGEDDON </a>';?></li>
<li><?php $eve="DROID HOCKEY"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">DROID HOCKEY</a>';?></li>
<li><?php $eve="HYDROBOT"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">HYDROBOT</a>';?></li>
<li><?php $eve="COPTER'S KINGDOM"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">COPTERS KINGDOM</a>';?></li>
<li><?php $eve="LINE SEGUIDOR"; echo'<a href="retrive.php?dep='.$dept.'&eve='.$eve.'">LINE SEGUIDOR</a>';?></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">ATV</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">ATV</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">Workshop</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">2</a></li>
                  <li><a href="#">2</a></li>
                </ul>
              </li>
              <li class="dropdown-submenu" style="padding: 0;">
                <a href="#">EntreSum</a>
                <ul class="dropdown-menu" style="padding: 0;">
                  <li><a href="#">Hackathon</a></li>
                  <li><a href="#">Startup + Minutes To Millinoare</a></li>
                  <li><a href="#">Panel Dicussion</a></li>
                  <li><a href="#">IPL Auction</a></li>
                  <li><a href="#">Crowdpitch</a></li>
                  <li><a href="#">BizQuiz</a></li>
                </ul>
              </li>
          </ul>
        </li>
          
        <li><a href="#Xdepartmets">Departments</a></li>
        <li><a href="#Xschedule" >Schedule</a></li>
        <li><a href="registermain,php"">Register Now</a></li>
      </ul>

    </div>

  </div>
</div>
  <section id="tech-intro" >
</section>

  <section id="subevent1"  style="margin-top: 0% !important;" class="parallax-section smoothScroll">
  <div class="container">
    <div class="row">
      <div class="col-md-2 col-sm-2"></div>
      <div class="col-md-8 col-sm-8 text-center">
        <div class='panel-group' id='accordion' role='tablist' >
         


<?php
 $host = "localhost";
$pwd = "";
$user = "root";
$db = "purvit";
$conn = mysqli_connect($host, $user, $pwd);
$conn1= mysqli_select_db($conn,$db);
  $e=$_GET['eventname'];
//echo $e;
  //$v = 1;
  $back = "images/".$e.".jpg";
  
  echo'
    <style>
    #tech-intro{
        
         background: url("'.$back.'");
         background-size:cover!important;
      }
    </style>';


    
    $query="select abstract,description,rules,location,eventmanager from tech where e_name='".$_GET['eventname']."'";
    $t = mysqli_query($conn,$query);
    $team=mysqli_fetch_row($t);
    $data="";
    $data .= "<div id='numberone'></div>
        <div class='row'><div class='col-md-12 col-sm-12' style='padding-top: 20px;'>";
        $data .=" <p class='line-height-30' style='font-size: 50px; padding-bottom:10px; font-weight: bold';>".$team[0]."</p>
                  <div class='row'>
      <div class='col-sm-2 col-md-2'></div>
      <div class='col-sm-8 col-md-8'>";
        
                
        
        $data .= "<div class='col-md-12 col-sm-12 center-col text-center'>
                        <!-- start buttons -->
                        <a class='btn btn-lg btn-default btn-rounded md-margin-15px-bottom sm-display-table sm-margin-lr-auto' href='registermain.php' target='_blank'>Register</a> 
                        <!-- end buttons -->
                        </div>
                    </div>
                </div>
            <br><br>
        <div class='panel-group' id='accordion' role='tablist' >
        <div class='panel panel-primary'>
          <div class='panel-heading' role='tab' id='hrules'>       
                    <a class='collapsed' data-toggle='collapse'  href='#rules' aria-controls='rules' style='color: white;'>
                        <div class='panel-title'>
                        <span class='text-white xs-width-80 display-inline-block text-uppercase'>RULES</span>
                        <i class='fa fa-angle-down pull-right text-extra-dark-gray tz-icon-color'></i>
                        </div>
                    </a>
                  
          </div>
        <div id='rules' class='panel-collapse collapse' role='tabpanel' aria-labelledby='hrules' style=''>
          <div class='panel-body'>
                  <ul class='no-padding list-style-10' style='list-style: none;padding-left: 10px; '>";
                        
          $data .= $team[2];
          $data .= "</ul>
          </div>
        </div>
      </div>
    </div>
    <div class='panel-group' id='accordion' role='tablist' >
        <div class='panel panel-primary'>
          <div class='panel-heading' role='tab' id='hdes'>       
                    <a class='collapsed' data-toggle='collapse'  href='#description' aria-controls='description' style='color: white;'>
                        <div class='panel-title'>
                        <span class='text-white xs-width-80 display-inline-block text-uppercase'>Description</span>
                        <i class='fa fa-angle-down pull-right text-extra-dark-gray tz-icon-color'></i>
                        </div>
                    </a>
                  
          </div>
        <div id='description' class='panel-collapse collapse' role='tabpanel' aria-labelledby='hdes'>
          <div class='panel-body'>
                  <ul class='no-padding list-style-10' style='list-style: none;'>";
                  $data .= $team[1];  
          $data .= "</ul>
          </div>
        </div>
      </div>
    </div>



    <div class='panel-group' id='accordion' role='tablist' >
        <div class='panel panel-primary'>
          <div class='panel-heading' role='tab' id='hdes'>       
                    <a class='collapsed' data-toggle='collapse'  href='#contact' aria-controls='contact' style='color: white;'>
                        <div class='panel-title'>
                        <span class='text-white xs-width-80 display-inline-block text-uppercase'>Contact Details</span>
                        <i class='fa fa-angle-down pull-right text-extra-dark-gray tz-icon-color'></i>
                        </div>
                    </a>
                  
          </div>
        <div id='contact' class='panel-collapse collapse' role='tabpanel' aria-labelledby='hdes'>
          <div class='panel-body'>
                  <ul class='no-padding list-style-10' style='list-style: none;padding-left:10px;'>";
                  $data .= $team[3];  
   $data .= $team[4]; 
   $data .= "</ul>
          </div>
        </div>
      </div>
    </div>
    

   
          </div>
        </div>
      </div>
    </div>
    
  <div class='col-sm-2 col-md-2'></div>
</div>";
echo $data;
  
?>
</section>

</body>
</html>



