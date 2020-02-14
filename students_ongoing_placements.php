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
    <title>Students Home | Campus Recruitment</title>
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
                    <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="students_ongoing_placements.php">Ongoing Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="students_shortlisted_placements.php">Shortlisted Placements</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="students_available_tests.php">Available Tests</a>
                </li>
            </ul>
            <span class="navbar-text">
                <?php
                session_start();
                echo $_SESSION['usn'];
                ?>
            </span>
            <span class="navbar-text pl-3">
                <a href="logout.php" style="text-decoration:none;color:rgba(255,255,255,.5)">Logout</a>
            </span>
        </div>
    </nav>
    <!--- Nav Bar End -->
    <div class="container">
        <?php

        include "./dbcon/dbcon.php";
        $department = mysql_query("Select department from students_registration where usn = '$_SESSION[usn]'") or die(mysql_error());
        $dept = mysql_fetch_array($department);

        $result = mysql_query("SELECT c.company_name, j.* FROM jobs j, company_registration c
        WHERE j.company_id = c.company_id AND j.department = '$dept[0]'") or die(mysql_error());
        while ($row = mysql_fetch_array($result)) {
        ?><div class="card mt-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo $row[0]; ?>
                        <p><small class="text-muted"><?php echo $row[3]; ?></small></p>
                    </h5>
                    <div class="card-text">
                        <p>
                            <span class="mr-1"><b>PUC/Diploma:</b> <?php echo $row[9]; ?>%</span>
                            <span class="mr-1"><b>High School:</b> <?php echo $row[10]; ?>%</span>
                        </p>
                        <p>
                            <span class="mr-1"><b>Salary : </b><?php echo $row[5]; ?></span>
                            <span class="mr-1"><b>Drive Date : </b><?php echo $row[7]; ?></span>
                        </p>
                        <p><b>Description : </b><?php echo $row[6]; ?></p>
                    </div>
                </div>
            </div>
        <?php
        }
        ?>
    </div>
</body>

</html>