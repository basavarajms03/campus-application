<?php

include "./default-header.php";

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Company Registration | Campus Recruitment System</title>
</head>

<body>
    <div class="container">
        <h4 class="text-center mt-5 font-weight-bold text-secondary">Company Profile</h4>
    </div>
    <form action="company_registration_success.php" method="post" class="container mt-5" autocomplete="off">
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_id">Company ID <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" name="company_id" id="company_id" aria-describedby="helpId" placeholder="Enter Company ID" required>
                    <small id="helpId" class="form-text text-muted">Enter Company ID or HR ID</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_name">Company Name <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" name="company_name" id="company_name" aria-describedby="helpId" placeholder="Enter Company Name" required>
                </div>
            </div>
            <div class="col-md-4">
                <div class="form-group">
                    <label for="company_location">Location <span class="text-danger">*</span> </label>
                    <input type="text" class="form-control" name="company_location" id="company_location" aria-describedby="helpId" placeholder="Enter Location" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="company_employees">No. Of Employees</label>
                  <input type="text"
                    class="form-control" name="company_employees" id="company_employees" aria-describedby="helpId" placeholder="No. of Employees working" required>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                  <label for="comapnY-email">Official Email ID <span class="text-danger">*</span> </label>
                  <input type="email"
                    class="form-control" name="comapny-email" id="comapnY-email" aria-describedby="helpId" placeholder="Official Id" required>
                  <small id="helpId" class="form-text text-muted">Company Official Id like info@companyname.com</small>
                </div>
            </div>
            <div class="col-md-4">
                <br/>
                <p class="text-danger">You will get login credentials to the registered mail ID. So please enter valid mail ID</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-8">
                <div class="form-group">
                  <label for="company_description">Company Description</label>
                  <textarea class="form-control" name="company_description" id="company_description" rows="6" required></textarea>
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-primary btn-block col-md-3">Submit</button>
    </form>
</body>
</html>
<?php
include "./default-footer.php";
?>