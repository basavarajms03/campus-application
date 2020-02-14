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
    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
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
    </nav> -->
    <p id="demo" class="mb-5 alert alert-warning text-center position-fixed w-100" style="
    z-index: 1;
    top: 0;
"></p>
    <!--- Nav Bar End -->
    <?php
    include "./dbcon/dbcon.php";
    $jobid = $_GET['jobid'];
    $result = mysql_query("SELECT * FROM test t
    WHERE t.job_id = $jobid") or die(mysql_error());

    mysql_query("insert into students_test_taken values('$_SESSION[usn]','','$jobid')") or die(mysql_error());
    ?>
    <form name="myform" action="student_take_test_success.php" method="post" style="margin-top:5em !important">
        <input type="hidden" value="<?php echo $jobid; ?>" name="jobid">
        <div class="container mt-5">
            <?php
            $i = 0;
            while ($row = mysql_fetch_array($result)) {
                $i = $i + 1;
            ?>
                <div class="card mt-3">
                    <div class="card-body">
                        <h4 class="card-title">
                            <?php echo $i . ".&nbsp;" . $row[3]; ?>
                        </h4>
                        <div class="card-text">
                            <p>
                                <input type="radio" name="crct_answer<?php echo $i; ?>" id="" value="A">
                                A.&nbsp; <?php echo $row[4]; ?>
                            </p>
                            <p>
                                <input type="radio" name="crct_answer<?php echo $i; ?>" id="" value="B">
                                B.&nbsp; <?php echo $row[5]; ?>
                            </p>
                            <p>
                                <input type="radio" name="crct_answer<?php echo $i; ?>" id="" value="C">
                                C.&nbsp; <?php echo $row[6]; ?>
                            </p>
                            <p>
                                <input type="radio" name="crct_answer<?php echo $i; ?>" id="" value="D">
                                D.&nbsp; <?php echo $row[7]; ?>
                            </p>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
            <input type="submit" value="Submit" class="btn btn-primary btn-block mt-3 mb-5">
        </div>
    </form>
</body>

</html>
<script>
    var deadline = new Date();
    deadline.setMinutes(deadline.getMinutes() + 1); //Change time in minutes like 1min, 2min
    var x = setInterval(function() {
        var now = new Date().getTime();
        var t = deadline - now;
        var days = Math.floor(t / (1000 * 60 * 60 * 24));
        var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((t % (1000 * 60)) / 1000);
        document.getElementById("demo").innerHTML = minutes + "m " + seconds + "s ";
        if (t < 0) {
            clearInterval(x);
            document.myform.submit();
            document.getElementById("demo").innerHTML = "EXPIRED";
        }
    }, 1000);
</script>