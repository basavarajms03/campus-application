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
        <h4 class="text-center">Forgot Password</h4>
        <form action="forgot_success.php" method="post" class="mt-5" autocomplete="off">
            <div class="form-group">
                <label for="usn">Enter your email id</label>
                <input type="text" class="form-control" name="emailid" id="usn" aria-describedby="helpId" placeholder="Registered email id">
            </div>
            <button type="submit" class="btn btn-primary btn-sm">Submit</button>
        </form>
    </div>
</body>
</html>