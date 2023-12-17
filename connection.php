<?php
define("host","localhost:3306");
define("duser","root");
define("dpass","");
define("ddb","sl");
$conn=mysqli_connect(host, duser, dpass, ddb);
if(!$conn){
    echo "Unable to connect to db";
}
?>