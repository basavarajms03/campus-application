<?php

include "./dbcon/dbcon.php";

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Company Profile</title>
</head>

<body>

    <!-- Nav Bar Start -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#"><i class="fa fa-university"></i>&nbsp;CR System</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="company_home.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="company_profile.php">Company Profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="company_add_jobs.php">Add Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="company_check_jobs.php">Check Jobs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="check_selected_students.php">Check Selected Students</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="company_add_test_questions.php">Add Test Questions</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                session_start();
                echo $_SESSION['CompanyId'];
                ?>
            </span>
            <span class="navbar-text pl-3">
                <a href="logout.php" style="text-decoration:none;color:rgba(255,255,255,.5)">Logout</a>
            </span>
        </div>
    </nav>
    <!--- Nav Bar End -->
    <div class="container shadow-lg mb-5 bg-white rounded">
        <div class="mt-5 row">
            <div class="col-md-8">
                <h4 class="text-center">Company Profile</h4>
                <hr class="w-25 bg-warning" style="height:3px;border-radius:5px" />
                <div class="row">
                    <div class="col-md-2">
                        <img src="images/logo.jpg" alt="" srcset="" class="w-100">
                    </div>
                    <div class="col-md-6">
                        <!-- Display Company Details information -->
                        <?php

                        $result = mysql_query("select * from company_registration where company_id = '$_SESSION[CompanyId]'") or die(mysql_error());
                        $row = mysql_fetch_array($result);
                        echo "<p>Company Id :&nbsp;" . $row[0];
                        echo "<p>Company Name :&nbsp;" . $row[1];
                        echo "<p>Location :&nbsp;" . $row[2];
                        echo "<p>Email Id :&nbsp;" . $row[3];
                        echo "<p>No. Of Employees :&nbsp;" . $row[4];
                        echo "<p>Description :&nbsp;" . $row[5];
                        ?>
                        <div class="mt-3">
                        </div>
                        <!-- End Company Details Information -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <form action="company_change_password.php" method="post">
                    <h4 class="text-center">Change Password</h4>
                    <hr class="w-25 bg-warning" style="height:3px;border-radius:5px" />
                    <div class="form-group mt-3">
                        <label for="new_pass">New Password</label>
                        <input type="password" class="form-control" name="new_pass" id="new_pass" aria-describedby="helpId" placeholder="Enter New Password">
                    </div>
                    <button type="submit" class="btn btn-success btn-block">Change Password</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>