<?php

$id = $_GET['question_no'];

include "./dbcon/dbcon.php";

$sql_stat = mysql_query("delete from test where text_id = $id") or die(mysql_error());

if ($sql_stat) {
?>
    <script>
        alert("Question is deleted successfuly");
        document.location = "company_add_test_questions.php";
    </script>
<?php
} else {
?>
    <script>
        alert("Error while deleting question");
        document.location = "company_add_test_questions.php";
    </script>
<?php
}
