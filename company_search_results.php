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
    <!-- Display Company Details information -->
    <?php
    $result = mysql_query("SELECT S.USN, R.NAME, C.COMPANY_NAME, J.DESIGNATION, J.DEPARTMENT
                        FROM SELECTED_CANDIDATES S, STUDENTS_REGISTRATION R, JOBS J, COMPANY_REGISTRATION C
                        WHERE R.USN = S.USN
                        AND J.ID = S.JOBID
                        AND C.COMPANY_ID = S.COMPANY_ID
                        AND (J.DESIGNATION like '%$_POST[Designation]%' OR J.DEPARTMENT LIKE '%$_POST[Department]%')") or die(mysql_error());
    $count = mysql_num_rows($result);
    if ($count > 0) {
    ?>
        <table class="table table-striped w-100">
            <thead>
                <tr>
                    <th>USN</th>
                    <th>Name</th>
                    <th>Department</th>
                    <th>Designation</th>
                    <th>Company</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysql_fetch_array($result)) {
                    echo "<tr><td>";
                    echo $row[0];
                    echo "</td><td>";
                    echo $row[1];
                    echo "</td><td>";
                    echo $row[4];
                    echo "</td><td>";
                    echo $row[3];
                    echo "</td><td>";
                    echo $row[2];
                    echo "</td></tr>";
                }
                ?>
            </tbody>
        </table>
    <?php
    } else {
    ?>
        <p class="alert alert-danger"> No Jobs Found.</p>
    <?php
    }
    ?>