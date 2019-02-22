<!DOCTYPE html>
<html>
<head>
  <title></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/style3.css">
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</head>
<body>
  <section id="tech-intro">
</section>

  <section id="subevent1" class="parallax-section smoothScroll">
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
   
    
    $query="select abstract,description,rules,location,eventmanager from tech where e_name='".$_GET['eventname']."'";
    $t = mysqli_query($conn,$query);
    $team=mysqli_fetch_row($t);
    $data="";
    $data .= "<div id='numberone'></div>
        
                  <div class='row'>
      <div class='col-sm-2 col-md-2'></div>
      <div class='col-sm-8 col-md-8'>
        
                <div class='row'><div class='col-md-12 col-sm-12 center-col' style='padding-top: 20px;'>";
        $data .='<p class=\'line-height-30\' style=\'font-size: 50px; padding-bottom:10px; font-weight: bold;>\''.$team[0].'</p>'; 
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



