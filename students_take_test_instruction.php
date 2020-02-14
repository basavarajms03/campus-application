<?php
session_start();
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
    <title>Students Home | Campus Recruitment</title>
</head>

<body class="container mt-5">
    <div class="card">
        <div class="card-header text-center">
            Test Instructions
        </div>
        <div class="card-body">
            <ol>
                <li>
                    The clock will be set at the server. The countdown timer at the top, right-hand side of the screen will display the time available for you to complete the examination. When the timer reaches zero, the examination will end automatically. You will not be required to end or submit your examination.
                </li>
                <li>Answer all the questions which are in test.</li>
                <li>Once your test submitted, if you cleared the test you will get a mail to your registered mail id.</li>
                <li>once you start your test, don't refresh the page and don't open any of the windows and tabs</li>
                <li>To start test click on start test button.</li>
            </ol>
            <p class="text-center"><a href="student_take_test.php?jobid=<?php echo $_GET['jobid']; ?>" class="btn btn-danger pl-5 pr-5">Start Test</a></p>
        </div>
    </div>
</body>

</html>