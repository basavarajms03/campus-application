<?php

include "./default-header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Login | Campus Recruitment System</title>
</head>

<body>

    <div class="container col-md-4 offset-md-4 mt-5">
        <h4 class="text-center">College Login</h4>
        <form action="College_login_success.php" method="post" class="mt-5" autocomplete="off">
            <div class="form-group">
                <label for="CollegeID">College Username</label>
                <input type="text" class="form-control" name="CollegeID" id="CollegeID" aria-describedby="helpId" placeholder="Enter Username" autofocus>
                <small id="helpId" class="form-text text-muted">Enter your College ID</small>
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Enter Password">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <span class="float-right">
                <small><a href="college_forgot.php">Forgot password?</a></small>
            </span>
        </form>
    </div>
</body>

</html>