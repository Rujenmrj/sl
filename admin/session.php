<?php
session_start();
if(!isset($_SESSION["username"])&& !isset($_SESSION["accesstime"]))
{
    header("Location:../login.php");
}

?>