<?php
 
      if(isset($_POST['eventName']) && isset($_POST['subEventName']) && isset($_POST['members']) && isset($_POST['fees']) )
      {
        session_start(); 
        $_SESSION['eventName'] = $_POST['eventName'];
        $_SESSION['subEventName'] = $_POST['subEventName'];
        $_SESSION['members'] = $_POST['members'];
        $_SESSION['fees'] = $_POST['fees'];

      }
?>
<html>
<head>

<script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js" type="text/javascript"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/reg.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">


<meta name="viewport" content="width=device-width, initial-scale=1">

</head>

<body>
    <br>

     <div class="container ">

  <form class="well form-horizontal" action="register3.php" method="post" id="registration_form">
    <fieldset>

      <legend>
        
          <h2><b>Registration Form</b></h2>
        
      </legend><br>
      <div class = "bgimg" style= "width:100% ;height:20%">

        <div class="col-md-12 col-sm-12 " style="text-align:  right;font-size:120%">
          <h3><b>GTU Central Tech Fest</b></h3>
           <h4><b>Hosted By VGEC</b></h4> 
        </div> 
    </div>

      <?php
        $i=1;
        for ($i=1 ; $i<=$_POST['members'] ; $i++){
        if($i == 1)
        {
      ?>
        
     <center> <h2>Team Leader</h2></center>

      <div class="hidden1" style="margin-top:3%;">
      <div class="form-group">
        <label class="col-md-5 control-label">First Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="firstName<?php echo $i;?>" placeholder="First Name" class="form-control" type="text">

          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-5 control-label">Last Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="lastName<?php echo $i;?>" placeholder="Last Name" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Enrollment Number</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="enroll<?php echo $i;?>" placeholder="Enrollment" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Email</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email<?php echo $i;?>" placeholder="Email" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Contact No.</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone<?php echo $i;?>" placeholder="(+91)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">College Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
            <input name="college<?php echo $i;?>" placeholder="College full name" class="form-control" type="text">
          </div>
        </div>
      </div>
      </div>

    

      <div class="form-group ">
                    <label class="col-md-5 control-label ">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <input type="radio" name="gender<?php echo $i;?>" value="male" checked>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender<?php echo $i;?>" value="female">Female
                    </div>
                    <div class="col-md-8 col-sm-8"></div>
                   
                </div>

      

                

                 <div class="form-group ">
                   <label class="col-md-5 control-label">Volunteer Id</label>
                    <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-barcode"></i></span>
            <input name="volunteerid" placeholder="Volunteer Id" class="form-control" type="text">
          </div>
        </div>
                </div>

            <div class="form-group ">
                   <label class="col-md-5 control-label">Team Name</label>
                    <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="teamName" placeholder="Team Name" class="form-control" type="text">
          </div>
        </div>
                </div>


                <?php
                  }
                  else{
                ?>
 

     <center style="margin-top:7%;"> <h2>Team Member <?php
          echo $i-1; 
       ?></h2></center>


      <div class="hidden1" style="margin-top:3%;">
      <div class="form-group">
        <label class="col-md-5 control-label">First Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="firstName<?php echo $i;?>" placeholder="First Name" class="form-control" type="text">

          </div>
        </div>
      </div>


      <div class="form-group">
        <label class="col-md-5 control-label">Last Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
            <input name="lastName<?php echo $i;?>" placeholder="Last Name" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Enrollment Number</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
            <input name="enroll<?php echo $i;?>" placeholder="Enrollment" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Email</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
            <input name="email<?php echo $i;?>" placeholder="Email" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">Contact No.</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
            <input name="phone<?php echo $i;?>" placeholder="(+91)" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-5 control-label">College Name</label>
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
            <span class="input-group-addon"><i class="glyphicon glyphicon-education"></i></span>
            <input name="college<?php echo $i;?>" placeholder="College full name" class="form-control" type="text">
          </div>
        </div>
      </div>
      </div>

    

      <div class="form-group ">
                    <label class="col-md-5 control-label ">Gender</label>
                    <div class="col-md-4 inputGroupContainer">
                        <input type="radio" name="gender<?php echo $i;?>" value="male" checked>Male &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <input type="radio" name="gender<?php echo $i;?>" value="female">Female
                    </div>
                    <div class="col-md-8 col-sm-8"></div>
                   
                </div>
            <?php
              }
            }
            ?>

                

                 
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4"><br> 
          <center><button type="submit" class="btn btn-warning " style="width:100px" name="submit"><center>SUBMIT <span class="glyphicon glyphicon-send"></span></center></button>
      </center>
        </div>
      </div>

    </fieldset>
  </form>
      

    </body>
</html>
       