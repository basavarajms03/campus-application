<?php
session_start();
session_destroy();
?>
<script>
alert("You have successfully logged out");
document.location = "students_login.php";
</script>