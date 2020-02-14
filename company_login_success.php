<?php

session_start();

include "./dbcon/dbcon.php";

$CompanyID = $_POST['CompanyID'];
$password = $_POST['password'];

$result = mysql_query("select * from company_registration where company_id = '$CompanyID' and password = '$password'") or die(mysql_error());
$count = mysql_num_rows($result);

if($count > 0){
    $_SESSION['CompanyId'] = $CompanyID;
    ?>
    <script>
        alert("Login Successful");
        document.location = "company_home.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Sorry! Username or Password wrong");
        document.location = "company_login.php";
    </script>
    <?php
}
