<?php

session_start();

$company_id = $_POST['company_id'];
$company_name = strtoupper($_POST['company_name']);
$company_location = strtolower($_POST['company_location']);
$company_employees = $_POST['company_employees'];
$company_email = $_POST['comapny-email'];;
$company_description = $_POST['company_description'];
$company_password = rand(111111, 999999);

include "./dbcon/dbcon.php";

$stmt = "insert into company_registration values('$company_id', '$company_name','$company_location','$company_email','$company_employees','$company_description','$company_password')";

$result = mysql_query("Select * from company_registration where company_id = '$company_id' or email_id = '$company_email'") or die(mysql_error());
$count = mysql_num_rows($result);

if($count == 0){
    if (mysql_query($stmt)) {
        $to       = $company_email;
        $subject  = 'Campus Recruitment';
        $message  = '<div style="font-family:verdana"><h3 style="text-align:center;color:#00A99D;border-bottom:3px solid navy;font-family:verdana">Campus Recruitment</h3><p style="font-family:verdana;text-align:center">Hi</p>
                <p style="text-align:center">Thank you for registering campus recruitment system.Your username and password as shown below,
                use the below credentials to login to campus recruitment system. Do not share your credentials to
                any one.</p>
                <p><b>Company ID</b> &nbsp; : &nbsp; '.$company_id.'<br>
                <b>Password</b> &nbsp; : &nbsp; '.$company_password.'</p></div>';
        $headers  = 'From: pverify03@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
        if (mail($to, $subject, $message, $headers))
            echo "Email sent";
        else
            echo "Email sending failed";
        ?>
        <script>
            alert("Registration Successful check your email for password.");
            document.location = "company_login.php";
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
    }else{
    ?>
    <script>
        alert("Sorry! Already account exist with this Company id or email id please try again.");
        document.location = "company_login.php";
    </script>
    <?php
}