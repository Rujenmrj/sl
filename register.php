<?php
if($_SERVER['REQUEST_METHOD']=='POST'){
    $username=$_POST['username'];
    $password=md5($_POST['password']);
    $email=$_POST['email'];
    //Writing the sql for inserting the user into users table
    $sql = "INSERT into users(`username`,`password`,`email`,`role`,`status`)VALUES('$username','$password','$email','user', 1)";
    //making connection
    include("connection.php");
    //Executing the query
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    if($qry){
        echo "Data inserted successfully";
    }
}
else{
    header("location:register.html");
}

?>