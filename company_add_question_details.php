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
    <div class="container mt-5 col-md-6 offset-md-3">
        <form action="company_add_question_details_success.php" method="post" autocomplete="off">
            <input type="hidden" name="jobid" value="<?php echo $_GET['jobid']; ?>">
            <div class="form-group">
              <label for="question">Question</label>
              <textarea class="form-control" name="question" id="question" rows="4"></textarea>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="a">Option A</label>
                      <input type="text" class="form-control" name="a" id="a" aria-describedby="helpId" placeholder="Option A">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="b">Option B</label>
                      <input type="text" class="form-control" name="b" id="b" aria-describedby="helpId" placeholder="Option B">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="c">Option C</label>
                      <input type="text" class="form-control" name="c" id="c" aria-describedby="helpId" placeholder="Option C">
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                      <label for="d">Option D</label>
                      <input type="text" class="form-control" name="d" id="d" aria-describedby="helpId" placeholder="Option D">
                    </div>
                </div>
            </div>
            <div class="form-group">
              <label for="crct_answer">Correct Answer</label>
              <input type="text" class="form-control" name="crct_answer" id="crct_answer" aria-describedby="helpId" placeholder="Correct Answer">
            </div>
            <button type="submit" class="btn btn-primary btn-block">Submit</button>
        </form>
    </div>