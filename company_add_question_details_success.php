<?php

session_start();

include "./dbcon/dbcon.php";

$companyid = $_SESSION['CompanyId'];
$jobid = $_POST['jobid'];
$crct_answer = strtoupper($_POST['crct_answer']);
$question = $_POST['question'];
$a = strtoupper($_POST['a']);
$b = strtoupper($_POST['b']);
$c = strtoupper($_POST['c']);
$d = strtoupper($_POST['d']);

$query = mysql_query("insert into test values('', '$companyid','$jobid','$question','$a','$b','$c','$d','$crct_answer')") or die(mysql_error());

if($query){
    ?>
    <script>
        alert("Question added successfully add one more question");
        document.location = "company_add_question_details.php?jobid=<?php echo $jobid; ?>";
    </script>
    <?php
}else{
    ?>
    <script>
        alert("Something went wrong..! please try again later.");
        document.location = "company_add_question_details.php?jobid=<?php echo $jobid; ?>";
    </script>
    <?php
}