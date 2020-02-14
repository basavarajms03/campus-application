<?php

session_start();

include "./dbcon/dbcon.php";

$jobid = $_POST['jobid'];
$usn = $_SESSION['usn'];


$result = mysql_query("SELECT t.company_id, c.company_name FROM test t, company_registration c
WHERE t.company_id = c.company_id AND t.job_id = '$jobid'") or die("Company Id" . mysql_error());

$row = mysql_fetch_array($result);
$companyId = $row[0];
$company_name = $row[1];

$result = mysql_query("SELECT crct_answer FROM test
WHERE job_id = $jobid ") or die("Number Of counts" . mysql_error());

$count = mysql_num_rows($result);

$user_answers = array();

$i = 1;

while ($count != 0) {
    array_push($user_answers, $_POST['crct_answer' . $i]);
    $i += 1;
    $count = $count - 1;
}

$crct_answer = array();

$percentage = 0;

while ($row = mysql_fetch_array($result)) {
    array_push($crct_answer, $row[0]);
}

$count = mysql_num_rows($result);

for ($j = 0; $j < $count; $j++) {
    if ($crct_answer[$j] == $user_answers[$j]) {
        $percentage += 1;
    }
}

$percentage = ($percentage * 100) / 2;
if ($percentage >= 50) {
    mysql_query("insert into students_test_clear values('$usn','$companyId','$jobid')") or die(mysql_error());

    $result = mysql_query("select * from students_registration where usn = '$usn'") or die(mysql_error());
    $row = mysql_fetch_array($result);
    $to       = $row[3];
    $subject  = 'Test Clear Notification';
    $message  = '<font face="verdana">Hi, You cleared the test for the company <b>'.$company_name . '</b><br/>
                    Thank you for taking the test.';
    $headers  = 'From: basavaraj.sangur12345@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-type: text/html; charset=utf-8';
    if (mail($to, $subject, $message, $headers));
?>
    <script>
        alert("Your answers has been saved, Thank's for attending test");
        document.location = "students_available_tests.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Sorry you are not cleared the test.");
        document.location = "students_available_tests.php";
    </script>
<?php
}
