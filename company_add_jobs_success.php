<?php
session_start();

include "./dbcon/dbcon.php";

$company_id = $_SESSION['CompanyId'];
$skills = $_POST['skills'];
$designation = $_POST['designation'];
$date = $_POST['date'];
$salary = $_POST['salary'];
$description = $_POST['description'];
$Gmarks = $_POST['Gmarks'];
$Hmarks = $_POST['Hmarks'];
$Pmarks = $_POST['Pmarks'];
$test = $_POST['test'];
$department = $_POST['department'];

$company_info = mysql_query("Select * from company_registration where company_id = '$company_id'");
$company_information = mysql_fetch_array($company_info);

$query = mysql_query("insert into jobs values('', '$company_id', '$designation', '$skills', '$salary','$description', '$date','$Hmarks','$Pmarks','$Gmarks','$test', '$department')") or die(mysql_error());
if ($query) {

    $result = mysql_query("SELECT * FROM students_registration") or die(mysql_error());

    while ($row = mysql_fetch_array($result)) {

        $to       = $row[3];
        $subject  = 'Campus Recruitment (' . $company_information[1] . ' Notification)';
        $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
    <p>Please go through details on Job Description and Hiring process, before registering.</p>
    <h3>Job Information is as shown below</h3>
    <p><b>Job Role :</b> ' . $designation . '</p>
    <p><b>Eligible Batches :</b> ' . date('yy') . '</p>
    <p><b>Eligible Degree :</b> Diploma in ('.$department.')</p>
    <p><b>Venue :</b> College Placement Cell</p>
    <p><b>Drive Date :</b> ' . $date . '</p>
    <p><b>Description :</b> ' . $description . '</p>
    <p><b>Note</b>
    <ol>1. Carry copies of updated resume, Marks cards till date.</ol>
    <ol>2. Govt ID and college ID and Passport size photos</ol>
    <ol>3. Be on time at the venue</ol>
    <ol>4. Not allowed for the late candidates</ol>';
        $headers  = 'From: pverify03@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }

    $result = mysql_query("SELECT * FROM students_registration s, jobs j WHERE j.company_id =  '$company_id' AND j.GMarks <= s.UgAgg
AND j.PMarks <= s.PDAgg
AND j.department = '$department'
AND j.HMarks <= s.Hagg") or die(mysql_error());

    while ($row = mysql_fetch_array($result)) {

        $to       = $row[3];
        $subject  = 'Campus Recruitment (' . $company_information[1] . ' Notification)';
        $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
        <p>You are shortlisted for the following campus Please go through details on Job Description and Hiring process, before registering.</p>
        <h3>Job Information is as shown below</h3>
    <p><b>Job Role :</b> ' . $designation . '</p>
    <p><b>Eligible Batches :</b> ' . date('yy') . '</p>
    <p><b>Eligible Degree :</b> Diploma in ('.$department.')</p>
    <p><b>Venue :</b> College Placement Cell</p>
    <p><b>Drive Date :</b> ' . $date . '</p>
    <p><b>Description :</b> ' . $description . '</p>
    <p><b>Note</b>
    <ol>1. Carry copies of updated resume, Marks cards till date.</ol>
    <ol>2. Govt ID and college ID and Passport size photos</ol>
    <ol>3. Be on time at the venue</ol>
    <ol>4. Not allowed for the late candidates</ol>';
        $headers  = 'From: pverify03@gmail.com' . "\r\n" .
            'MIME-Version: 1.0' . "\r\n" .
            'Content-type: text/html; charset=utf-8';
        mail($to, $subject, $message, $headers);
    }

?>
    <script>
        alert("Job Details addded Successfully and mail sent for register students");
        document.location = "company_add_jobs.php";
    </script>
<?php
} else {
?>
    <script>
        alert("something went wrong while adding Jobs Details");
        document.location = "company_add_jobs.php";
    </script>
<?php
}
