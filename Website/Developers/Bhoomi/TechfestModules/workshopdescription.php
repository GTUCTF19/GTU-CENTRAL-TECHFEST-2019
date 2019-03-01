<?php
    define('SERVER', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DB', 'techfest1');
    $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    $ename=$_GET["e_name"];
    $abstract = null;
    $rules = null;
    $sql = "SELECT abstract, e_name, rules FROM workshop WHERE workshop.e_name='".$ename."'";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {
            $abstract = $row["abstract"];
            $rules = $row["rules"];
        }
    } else {
        echo "0 results";
    }
    mysqli_close($conn);
?> 

<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Event Details</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link href="files/css_workshop.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"> 
  </head>
  <body bgcolor="#E6E6FA" data-spy="scroll" data-target=".navbar" data-offset="50" >
    <div class="container">
      <h2><?php echo $ename;?></h2><br>
      <div class="media">
        <div class="media-left media-top">
          <img src="files/vgeclogo.jpg" class="media-object" style="width:300px; height:300px">
        </div>
        <div class="media-body">
          <div class="tab" style="width:600px">
            <button class="tablinks" onclick="openCity(event, 'About')">About</button>
            <button class="tablinks" onclick="openCity(event, 'Rules')">Rules</button>
            <button class="tablinks" onclick="openCity(event, 'Contact')">Contact</button>
            <button class="tablinks" onclick="openCity(event, 'Registration')">Registration</button>
          </div>
          
          <div id="About" class="tabcontent" style="width:600px">
            <h3>About</h3>
            <p><?php echo $abstract; ?></p>
          </div>

          <div id="Rules" class="tabcontent" style="width:600px">
            <h3>Rules</h3>
            <p><?php echo $rules; ?></p>
          </div>

          <div id="Contact" class="tabcontent" style="width:600px">
            <h3>Contact</h3>
            <p>bla bla bla</p>
          </div>

          <div id="Registration" class="tabcontent" style="width:600px">
            <h3>Register Here</h3>
            <p>bla bla bla</p><br>
            <button class="register"><span>Register </span></button>
          </div>
        </div>
      </div>
    </div>
    <script>
      function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
          tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
          tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
      }
    </script>
  </body>
</html>
