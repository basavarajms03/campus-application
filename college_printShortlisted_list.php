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
<body onLoad="window.print()">
<?php

    $id = $_GET['id'];
    $company_id = $_GET['companyId'];

    include "./dbcon/dbcon.php";

    $result = mysql_query("SELECT * FROM students_registration s, jobs j, company_registration c WHERE j.company_id =  '$id' AND j.GMarks <= s.UgAgg
AND j.PMarks <= s.PDAgg
AND j.HMarks <= s.Hagg
AND j.department = s.department
AND j.id = '$company_id'
GROUP BY s.usn") or die(mysql_error());

$row1 = mysql_fetch_array($result);
$company_name = $row1[31];

    ?>
	
	<center>
				<img src="images/logo.png">
			</center>
		<h1 class="text-center font-weight-bold">T.M.A.E.S Polytechnic Hosapete</h1>
		<h2 class="text-center font-weight-bold">Company Name : <?php echo $company_name; ?></h2>

    <table class="table table-striped w-100">
        <thead>
            <tr>
                <th>USN</th>
                <th>Name</th>
                <th>Email</th>
                <th>Date-of-Birth</th>
                <th>Diploma Aggregate</th>
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
                echo $row[3];
                echo "</td><td>";
                echo $row[2];
                echo "</td><td>";
                echo $row[10];
                echo "</td></tr>";
            }
            ?>
        </tbody>
    </table>
</body>
</html>