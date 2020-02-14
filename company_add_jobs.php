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
    <h4 class="mt-5 text-center">Add Jobs</h4>
    <hr class="w-25 bg-warning" style="height:3px;border-radius:5px" />
    <div class="mt-5 col-md-4 container">
        <form action="company_add_jobs_success.php" method="post">
            <div class="form-group">
                <label for="designation">Designation</label>
                <input type="text" class="form-control" name="designation" id="designation" aria-describedby="helpId" placeholder="Enter designation">
            </div>
            <div class="form-group">
                <label for="skills">Skills</label>
                <input type="text" class="form-control" name="skills" id="skills" aria-describedby="helpId" placeholder="Enter Skills">
                <small id="helpId" class="form-text text-muted">Enter skills with ( Comma Delimiter )</small>
            </div>
            <div class="form-group">
                <label for="test">Do You Want To Take Test?(For Students) </label>
                <select class="form-control" name="test" id="test">
                    <option>--Select--</option>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
            </div>
            <br>
            <h6 class="text-center">Cut Off Marks</h6>
            <br />
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Gmarks">Metrics</label>
                        <input type="text" class="form-control" name="Gmarks" id="Gmarks" aria-describedby="helpId" placeholder="Metrics">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Pmarks">PUC/Diploma</label>
                        <input type="text" class="form-control" name="Pmarks" id="Pmarks" aria-describedby="helpId" placeholder="PUC/Diploma">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="Hmarks">Graduation</label>
                        <input type="text" class="form-control" name="Hmarks" id="Hmarks" aria-describedby="helpId" placeholder="Graduation" readonly>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="date">Date</label>
                        <input type="date" class="form-control" max="2020-12-31" name="date" id="date" aria-describedby="helpId" placeholder="Enter Hiring Date">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="salary">Salary</label>
                        <input type="text" class="form-control" name="salary" id="salary" aria-describedby="helpId" placeholder="Enter CTC">
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="form-group">
                    <label for="number">Department <span class="text-danger">*</span></label>
                    <select class="form-control" name="department" required>
                        <option>-- Select --</option>
                        <option value="CS">Computer Science</option>
                        <option value="Civil">Civil</option>
                        <option value="EC">Electronics and Engineering</option>
                        <option value="Mech">Mechanical</option>
                        <option value="EE">Electrical and Electronics</option>
						<option value="automobile">Automobile</option>
						<option value="MT">Metallorgy</option>
						<option value="MN">Mining</option>
                    </select>
                </div>
            </div>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" name="description" id="description" rows="6"></textarea>
            </div>
            <button type="submit" class="btn btn-primary btn-block mb-5">Submit</button>
        </form>
    </div>
</body>

</html>