<?php

session_start();

include "./dbcon/dbcon.php";

$CollegeID = $_POST['CollegeID'];
$password = $_POST['password'];

if($CollegeID == "username" && $password == "password"){
    ?>
    <script>
        alert("You are successfully logged in");
        document.location = "college_home.php";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Please check username and password");
        document.location = "college_login.php";
    </script>
    <?php
}