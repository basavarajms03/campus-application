<?php

session_start();

include './dbcon/dbcon.php';

if (!empty($_POST['check_list'])) {
    // Loop to store and display values of individual checked checkbox.
    foreach ($_POST['check_list'] as $selected) {
        $id_info = explode(':', $selected);

        echo $id_info[0] . " " . $id_info[1];
        $company_id = $_SESSION['CompanyId'];
        $usn = $id_info[0];
        $JobId = $id_info[1];

        $success = mysql_query("insert into selected_candidates values('$company_id','$JobId','$usn')") or die(mysql_error());
    }
}
 else {

    $company_id = $_SESSION['CompanyId'];
    $usn = $_GET['usn'];
    $JobId = $_GET['jobId'];

    $success = mysql_query("insert into selected_candidates values('$company_id','$JobId','$usn')") or die(mysql_error());
}

if ($success) {
?>
    <script>
        alert("Students has been selected");
        document.location = 'check_selected_students.php';
    </script>
<?php
} else {
?>
    <script>
        alert("Something went wrong");
        document.location = 'check_selected_students.php';
    </script>
<?php
}
