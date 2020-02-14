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
    <title>Company Home | Campus Recruitment</title>
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
        <a class="nav-link" href="college_add_jobs.php">Add Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="college_registered_students.php">Registered Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="college_check_jobs.php">Check Jobs</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="college_check_selected_students.php">Check Selected Students</a>
      </li>
    </ul>
    <span class="navbar-text pl-3">
        <a href="logout.php" style="text-decoration:none;color:rgba(255,255,255,.5)">Logout</a>
    </span>
  </div>
</nav>
<!--- Nav Bar End -->

<!-- Home Page -->
<a href="college_printStudents_list.php" class="ml-3 mt-4 mb-4 btn btn-primary">Print Students List</a>

<?php
include "dbcon/dbcon.php";
$registered_students = mysql_query("Select * from students_registration") or die(mysql_error());
if(mysql_num_rows($registered_students) == 0){
	echo "<p class='alert alert-danger'>No Students Registered Till Date.</p>";
} else {
	?>
	    <table class="table table-striped w-100">
			<tr>
				<td>USN</td>
				<td>Name</td>
				<td>Email</td>
				<td>Mobile Number</td>
				<td>PUC/Dip Pass</td>
				<td>PUC/Dip Agg</td>
				<td>SSLC Pass</td>
				<td>SSLC Agg</td>
				<td>Department</td>
			</tr>
	<?php
	while($row = mysql_fetch_array($registered_students)){
		echo "<tr><td>";
		echo $row[0];
		echo "</td><td>";
		echo $row[1];
		echo "</td><td>";
		echo $row[3];
		echo "</td><td>";
		echo $row[4];
		echo "</td><td>";
		echo $row[9];
		echo "</td><td>";
		echo $row[10];
		echo "</td><td>";
		echo $row[12];
		echo "</td><td>";
		echo $row[13];
		echo "</td><td>";
		echo $row[17];
		echo "</td></tr>";
	}
	?>
	
		</table>
		<?php
}

?>
<!-- Home Page End -->
</body>
</html>