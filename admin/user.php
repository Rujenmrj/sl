<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>USer</title>
</head>
<body>
    <?php
    include("inc_header.php");
    echo "<h1>All Users</h1>";
    echo "<table border=0 cellpadding=5 cellspacing=5>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>username</th>";
    echo "<th>Email</th>";
    echo "<th>role</th>";
    echo "<th>status</th>";
    echo "<th></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $sql="SELECT * FROM users ORDER BY id DESC LIMIT 0,100";
    include("../connection.php");
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count=mysqli_num_rows($qry);
    if($count>=1){
        echo "<h3>We have $count records.</h3>";
        while($row=mysqli_fetch_array($qry)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['email']."</td>";
            echo "<td>".$row['role']."</td>";
            echo "<td>".$row['status']."</td>";
            echo "<td>EDIT | <a href=editdeleteuser.php?id=".$row['id']."&action=delete>DELETE</a> </td>";
            echo "</tr>";
        }
    }
    else{
        echo "<h1>Sorry no record Found</h1>";
    }

    echo"</tbody>";
    echo "</table>";

    require("inc_footer.php");
    ?>
</body>
</html>