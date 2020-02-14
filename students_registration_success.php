<?php

session_start();

include "./dbcon/dbcon.php";

$usn = strtoupper($_POST['usn']);
$fname = strtoupper($_POST['fname']);
$mname = strtoupper($_POST['mname']);
$lname = strtoupper($_POST['lname']);
$dob =   strtoupper($_POST['dob']);
$email = $_POST['email'];
$mobile_number = strtoupper($_POST['number']);
$department = $_POST['department'];

$UGBoard = strtoupper($_POST['UGboard']);
$UGPassing = strtoupper($_POST['UG-passing-year']);
$UGPercentage = strtoupper($_POST['UG-agg']);

$PDBoard = strtoupper($_POST['PDBoard']);
$PDPassing = strtoupper($_POST['PDYear']);
$PDPercentage = strtoupper($_POST['PDAggregate']);

$HBoard = strtoupper($_POST['HBoard']);
$HPassing = strtoupper($_POST['HPassing']);
$HPercentage = strtoupper($_POST['HAgg']);

$Achievements = strtoupper($_POST['achievements']);
$Projects = strtoupper($_POST['projectDetails']);
$password = rand(100000,999999);


$result = mysql_query("Select * from students_registration where usn = '$usn'") or die(mysql_error());
$count = mysql_num_rows($result);
if ($count == 0) {
    $stmt = "insert into students_registration values('$usn', '$fname $mname $lname', '$dob','$email','$mobile_number',
    '$UGBoard', '$UGPassing','$UGPercentage','$PDBoard','$PDPassing','$PDPercentage',
    '$HBoard','$HPassing','$HPercentage','$Achievements','$Projects','$password', '$department')";
    if (mysql_query($stmt)) {
        $to       = $email;
        $subject  = 'Campus Recruitment';
        $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
                <p>Thank you for registering campus recruitment system</p>
                <p>Your username and password as shown below</p>
                <p><b>Username</b> &nbsp; : &nbsp; '.$usn.'<br>
                <b>Password</b> &nbsp; : &nbsp; '.$password.'</p>';
        $headers  = 'From: pverify03@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
		mail($to, $subject, $message, $headers);
        ?>
        <script>
            alert("Registration Successful check your email for password.");
            document.location = "students_login.php";
        </script>
    <?php
        } else {
            ?>
        <script>
            alert("Something wrong while submitting contact your administrator.");
            document.location = "index.php";
        </script>
    <?php
        }
    } else {
        ?>
    <script>
        alert("Sorry USN Already Exist");
        document.location = "index.php";
    </script>
<?php
}
