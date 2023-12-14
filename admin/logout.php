<?php
session_start();
//killing all session at once
session_destroy();
//redirect to login.php
header("Location:../login.php");
?>