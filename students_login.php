<?php

include "./default-header.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Login</title>
</head>

<body>

    <div class="container col-md-4 offset-md-4 mt-5">
        <h4 class="text-center">Students Login</h4>
        <form action="students_login_success.php" method="post" class="mt-5" autocomplete="off">
            <div class="form-group">
                <label for="usn">Registration ID</label>
                <input type="text" class="form-control" name="usn" id="usn" aria-describedby="helpId" placeholder="Enter Registration ID">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" id="password" aria-describedby="helpId" placeholder="Enter Password">
                <small id="helpId" class="form-text text-muted">If you registered enter or register first to get password.</small>
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
            <span class="float-right">
                <small><a href="forgot.php">Forgot password?</a></small>
            </span>
            <div class="text-center">
                <p>New Student Registration</p>
                <p><i class="fa fa-long-arrow-right"></i><a href="students_registration.php">Register Here</a></p>
            </div>
        </form>
    </div>
</body>
</html>