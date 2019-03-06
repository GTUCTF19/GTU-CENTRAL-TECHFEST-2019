<html>
<head>
</head>
<body>
<?php
if(isset($_POST['submit'])){

    //collect form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $enroll = $_POST['enroll'];
    $college = $_POST['college'];
    $email = $_POST['email'];

    //check name is set
    if($firstName ==''){
        $error[] = 'Name is required';
    }

    //check for a valid email address
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
         $error[] = 'Please enter a valid email address';
    }

    //if no errors carry on
    if(!isset($error)){

        //create html of the data
        ob_start();
        ?>
        <!-- Add gtu central techfest poster -->
        <img src="header.jpg"><br><br>
        <h1 style="text-align:center"><u>EVENT REGISTRATION RECEIPT</u></h1><br>
        <table align="center" frame="box">
        <tr>
            <td style="font-size:20">First name </td> <td style="font-size:20">: </td><td style="font-size:20"><?php echo $firstName;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">Last name </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $lastName;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">Phone </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $phone;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">Enrollment no.  </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $enroll;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">Email </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $email;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">College </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $college;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        <tr>
            <td style="font-size:20">Gender </td><td style="font-size:20">: </td><td style="font-size:20"><?php echo $gender;?></td>
        </tr>
        <tr><td colspan="3"><hr width="1000"></td></tr>
        </table>
      
        
        <?php 
        $body = ob_get_clean();

        $body = iconv("UTF-8","UTF-8//IGNORE",$body);

        include("mpdf/mpdf.php");
        $mpdf=new \mPDF('c','A4','','' , 0, 0, 0, 0, 0, 0); 

        //write html to PDF
        $mpdf->WriteHTML($body);
 
        $mpdf->Output($firstName.'.pdf','D');

        //save to server
        //$mpdf->Output("mydata.pdf",'F');



    }
}

//if their are errors display them
if(isset($error)){
    foreach($error as $error){
        echo "<p style='color:#ff0000'>$error</p>";
    }
}
?> 
<div>
<form action='' method='post'>
<p><label>First Name</label><br><input type='text' name='firstName' value=''></p> 
<p><label>Last Name</label><br><input type='text' name='lastName' value=''></p> 
<p><label>Phone</label><br><input type='text' name='phone' value=''></p> 
<p><label>Email</label><br><input type='text' name='email' value=''></p> 
<p><label>College</label><br><input type='text' name='college' value=''></p> 
<p><label>Gender</label><br><input type='text' name='gender' value=''></p>
<p><label>Enrollment</label><br><input type='text' name='enroll' value=''></p> 
<p><input type='submit' name='submit' value='Submit'></p> 
</form>
    </div>
</body>
</html>