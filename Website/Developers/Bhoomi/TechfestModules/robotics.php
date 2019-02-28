<?php
    define('SERVER', 'localhost');
    define('USERNAME', 'root');
    define('PASSWORD', '');
    define('DB', 'techfest');
    $conn = mysqli_connect(SERVER,USERNAME,PASSWORD,DB);
    $records=[];
    $i=0;
    if(! $conn ) {
        die('Could not connect: ' . mysqli_error());
    }
    // echo 'Connected successfully<br>';
    $sql = 'SELECT e_name FROM robotics';
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) {  
            $records[$i] = $row["e_name"];
            $i=$i+1;
        }
    } else { /*echo "0 results";*/ }
    $len = count($records);
    mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">
    <head>
      <meta charset="utf-8">
      <title>Robotics | GTU CENTRAL TECHFEST'19</title>
      <meta content="width=device-width, initial-scale=1.0" name="viewport">
      <meta content="" name="keywords">
      <meta content="" name="description">
      <link href="css/fonts.css" rel="stylesheet">
      <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="css/style.css" rel="stylesheet">
    </head>
    <body>
      <main id="main">
        <section id="eventstwo" class="section-with-bg wow fadeInUp">
          <div class="container">
            <div class="section-header">
              <h2>Robotics Events</h2>
            </div>
            <div class="row">
                <?php
                    for($i=0; $i<$len; $i++) {
                      echo '<div class="col-lg-3 col-md-6">';
                        echo '<div class="eventtwo" id="shadow">';
                          echo '<div class="eventtwo-img">';
                            echo '<img src="img/hotels/'.(string)$i.'.jpg" alt="Event 1" class="img-fluid">';
                          echo '</div>';
                          echo '<h3><a href="speaker-details.html"><center>' . $records[$i] . '</center></a></h3>';
                        echo '</div>';
                      echo '</div>';
                    }
                ?>
            </div>
          </div>
        </section>
      <script src="lib/jquery/jquery.min.js"></script>
      <script src="lib/wow/wow.min.js"></script>
      <script src="js/mainforevents.js"></script>
    </body>
</html>
