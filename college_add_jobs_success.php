<?php
session_start();

include "./dbcon/dbcon.php";

$company_id = $_POST['companyId'];
$companyName = $_POST['companyName'];

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

$is_company = mysql_query("SELECT * FROM company_registration WHERE company_id = $company_id") or die(mysql_error());
$is_company_exist = mysql_num_rows($is_company);

if ($is_company_exist > 0) {
    $query = mysql_query("insert into jobs values('', '$company_id', '$designation', '$skills', '$salary','$description', '$date','$Hmarks','$Pmarks','$Gmarks','$test', '$department')") or die(mysql_error());
    if ($query) {
        $result = mysql_query("SELECT * FROM students_registration") or die(mysql_error());

        while ($row = mysql_fetch_array($result)) {

            $to       = $row[3];
            $subject  = 'Campus Recruitment  (College Notification)';
            $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
        <p>Please go through details on Job Description and Hiring process, before registering.</p>
        <h3>Job Information is as shown below</h3>
        <p><b>Company Name :</b> ' . $companyName . '</p>
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
    AND j.department = s.department
    AND j.HMarks <= s.Hagg") or die(mysql_error());

        while ($row = mysql_fetch_array($result)) {
            $to       = $row[3];
            $subject  = 'Campus Recruitment (College Notification)';
            $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
            <p>You are shortlisted for the following campus Please go through details on Job Description and Hiring process, before registering.</p>
            <h3>Job Information is as shown below</h3>
            <p><b>Company Name :</b> ' . $companyName . '</p>
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
            alert("Jobs Details addded Successfully");
            document.location = "college_add_jobs.php";
        </script> 
    <?php
    } else {
    ?>
        <script>
            alert("Jobs Details addded Successfully");
            document.location = "college_add_jobs.php";
        </script>
        <?php
    }
} else {
    $is_company_not_exist = mysql_query("INSERT INTO company_registration(company_id, company_name) VALUES('$company_id','$companyName')") or die(mysql_error());
    if ($is_company_not_exist) {
        $query = mysql_query("insert into jobs values('', '$company_id', '$designation', '$skills', '$salary','$description', '$date','$Hmarks','$Pmarks','$Gmarks','$test','$department')") or die(mysql_error());
        if ($query) {

            $result = mysql_query("SELECT * FROM students_registration") or die(mysql_error());

            while ($row = mysql_fetch_array($result)) {

                $to       = $row[3];
                $subject  = 'Campus Recruitment (College Notification)';
                $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
        <p>Please go through details on Job Description and Hiring process, before registering.</p>
        <h3>Job Information is as shown below</h3>
        <p><b>Company Name :</b> ' . $companyName . '</p>
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
		AND j.department = s.department
        AND j.HMarks <= s.Hagg") or die(mysql_error());

            while ($row = mysql_fetch_array($result)) {

                $to       = $row[3];
                $subject  = 'Campus Recruitment (College Notification)';
                $message  = '<font face="verdana"><p style="font-family:verdana">Hi</p>
        <p>Please go through details on Job Description and Hiring process, before registering.</p>
        <h3>Job Information is as shown below</h3>
        <p><b>Company Name :</b> ' . $companyName . '</p>
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
                alert("Jobs Details addded Successfully");
                document.location = "college_add_jobs.php";
            </script>
        <?php
        } else {
        ?>
            <script>
                alert("Jobs Details addded Successfully");
                document.location = "college_add_jobs.php";
            </script>
<?php
        }
    }
}
