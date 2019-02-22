<?php
	if(isset($_POST['eventname']))
	{
		include("../include/config.php");
		global $conn;
		$query="select abstract,description,rules,location,eventmanager from tech where e_name='".$_POST['eventname']."'";
		$t = mysqli_query($conn,$query);
		$team=mysqli_fetch_row($t);
		$data="";
		$data .= "<div id='numberone'></div>
        <div id='over' class='panel-collapse collapse in' role='tabpanel' aria-labelledby='headingOver'>
          <div class='panel-body'>
                  <div class='row'>
      <div class='col-sm-3 col-md-3'></div>
      <div class='col-sm-6 col-md-6'>
        <section class='bg-white wow fadeIn'>
            <div class='container'>
                <div class='row'><div class='col-md-12 col-sm-12 center-col' style='padding-top: 20px;'>";
				$data .='<p class=\'line-height-30\' style=\'font-size: 50px; padding-bottom:10px; font-weight: bold;>\''.$team[0].'</p>'; 
				$data .= "<div class='col-md-12 col-sm-12 center-col text-center'>
                        <!-- start buttons -->
                        <a class='btn btn-lg btn-default btn-rounded md-margin-15px-bottom sm-display-table sm-margin-lr-auto' href='registermain.php' target='_blank'>Register</a> 
                        <!-- end buttons -->
                        </div>
                    </div>
                </div>
            </div>
        </section><br><br>
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
                  <ul class='no-padding list-style-10' style='list-style: none;padding-left: 20px; '>";
                        
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
                  <ul class='no-padding list-style-10' style='list-style: none;padding-left:20px;'>";
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
    
  <div class='col-sm-3 col-md-3'></div>
</div>";
echo $data;
	}
?>