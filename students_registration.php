<?php

include "./default-header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students Registraion | Campus Recruitment</title>
</head>

<body>
    <div class="container mt-5 col-lg-12 col-md-12 col-xs-12 col-sm-12">
			<center>
				<img src="images/logo.png">
			</center>
		<h1 class="text-center font-weight-bold">T.M.A.E.S Polytechnic Hosapete</h1>
        <h4 class="text-center text-dark font-weight-bold">Students Registration</h4>
        
		<p class="alert alert-danger container" style="text-transform:capitalize">* marks fields are mandatory.</p>
        <form action="students_registration_success.php" class="mt-5 container" method="post" autocomplete="off">
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                      <label for="usn">Registration ID <span class="text-danger">*</span></label>
                      <input type="text"
                        class="form-control" name="usn" id="usn" aria-describedby="helpId" placeholder="Enter your Registration ID" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="fname">First Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="fname" id="fname" aria-describedby="helpId" placeholder="Enter First Name" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mname">Middle Name</label>
                        <input type="text" class="form-control" name="mname" id="mname" aria-describedby="helpId" placeholder="Enter Middle Name" maxlength="1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="lname">Last Name</label>
                        <input type="text" class="form-control" name="lname" id="lname" aria-describedby="helpId" placeholder="Enter Last Name">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="dob">Date Of Birth <span class="text-danger">*</span></label>
                        <input type="date" max="2020-12-31" class="form-control" name="dob" id="dob" aria-describedby="helpId" placeholder="" required>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="email">Email  <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" id="email" aria-describedby="helpId" placeholder="Enter your email" required>
                        <small id="helpId" class="form-text text-muted">Enter valid email to send password</small>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number">Mobile Number  <span class="text-danger">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==10) return false;" class="form-control" name="number" id="number" aria-describedby="" placeholder="Enter your mobile number" required>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="number">Department <span class="text-danger">*</span></label>
                        <select class="form-control" name="department" required>
                            <option>-- Select --</option>
                            <option value="CS">Computer Science</option>
                            <option value="Civil">Civil</option>
                            <option value="EC">Electronics and Engineering</option>
                            <option value="Mech">Mechanical</option>
                            <option value="EE">Electrical and Electronics</option>
                        </select>
                    </div>
                </div>
            </div>

            <!-- Academic Details -->
            <p class="alert alert-success mt-3"><i class="fa fa-graduation-cap"></i>&nbsp;Graduation Details</p>

            <div class="row mt-3">
                <div class="col-md-3">
                    <div class="form-group text-primary">
                        <label for="PORD">PUC / Diploma</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="PDBoard">Board  <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="PDBoard" id="PDBoard" aria-describedby="helpId" placeholder="Enter Board">
                        <small id="helpId" class="form-text text-muted">Enter only letters</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="PDYear">Passing Year  <span class="text-danger">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==4) return false;" class="form-control" name="PDYear" id="PDYear" aria-describedby="helpId" placeholder="Enter passing year">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="PDAggregate">Aggregate  <span class="text-danger">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==4) return false;" class="form-control" step="any" name="PDAggregate" id="PDAggregate" aria-describedby="helpId" placeholder="Enter your aggregate">
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-3">
                    <div class="form-group text-primary">
                        <label for="High">High School</label>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="HBoard">Board <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" onkeypress="return (event.charCode > 64 && 
event.charCode < 91) || (event.charCode > 96 && event.charCode < 123)" name="HBoard" id="HBoard" aria-describedby="helpId" placeholder="Enter Board">
                        <small id="helpId" class="form-text text-muted">Enter only letters</small>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="HPassing">Passing Year  <span class="text-danger">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==4) return false;" class="form-control" name="HPassing" id="HPassing" aria-describedby="helpId" placeholder="Enter Passing Year">
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="form-group">
                        <label for="HAgg">Aggregate  <span class="text-danger">*</span></label>
                        <input type="number" onKeyPress="if(this.value.length==4) return false;" class="form-control" step="any" name="HAgg" id="HAgg" aria-describedby="helpId" placeholder="Enter High School Percentage">
                    </div>
                </div>
            </div>
            <!-- Academic Details End -->

            <!-- Achievements -->
            <p class="alert alert-success mt-5"><i class="fa fa-trophy"></i>&nbsp;Achievements</p>
            <div class="form-group">
                <label for="achievements">Enter Achievements</label>
                <textarea class="form-control" name="achievements" id="achievements" rows="6" required></textarea>
                <p class="form-text text-muted">Enter achivements in serial vise</p>
            </div>
            <!-- Achievements End -->

            <!-- Projects Details -->
            <p class="alert alert-success mt-5"><i class="fa fa-tasks" aria-hidden="true"></i>&nbsp;Projects Details</p>
            <div class="row mt-4">
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="projectDetails">Enter Project Details</label>
                        <textarea class="form-control" name="projectDetails" id="projectDetails" rows="6"></textarea>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-text text-muted">
                        <p>Enter Project data as following</p>
                        <p>1. Project Title</p>
                        <p>&nbsp;&nbsp;&nbsp;Project Platform</p>
                    </div>
                </div>
            </div>
            <!-- Projects Details End -->

            <button type="submit" class="btn btn-primary btn-block">Submit Records</button>
        </form>
    </div>
</body>

</html>

<?php

include "./default-footer.php";

?>

<style>
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }
</style>

<script>
    function validAlphabet() {
        var alphaExp = /^[a-zA-Z]+$/;
        if (document.getElementById('board1').value.match(alphaExp)) {
            //Your logice will be here.
        } else {
            alert("Please enter only alphabets");
            return false;
        }
    }

    document.getElementById('number').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('UG-passing-year').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('UG-agg').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('PDYear').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('PDAggregate').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('HPassing').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });

    document.getElementById('HAgg').addEventListener('keydown', function(e) {
        if (e.which === 38 || e.which === 40) {
            e.preventDefault();
        }
    });
</script>