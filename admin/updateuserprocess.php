<?php

if(isset($_POST["updateuser"])){
$uid=$_POST["id"];
$uusername=$_POST["username"];
$uemail=$_POST["email"];
$urole=$_POST["role"];
$ustatus=$_POST["status"];

$sql = "UPDATE users SET username='$uusername', email='$uemail', role='$urole', status='$ustatus' WHERE id=$uid";
include("../connection.php");
$qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
if($qry){
    header("Location:user.php?msg=Record Updated");
}
}
else{
    header("Location:user.php");
}

?>