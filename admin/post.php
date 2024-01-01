<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Category</title>
</head>
<body>
    <?php
    include("inc_header.php");
    echo "<h1>All Category</h1>";
    echo "<a href=addpost.php>Add Post </a>";
    if(isset($_GET["msg"])){
        echo "<h3>".$_GET["msg"]."</h3>";
    }
    echo "<table border=0 cellpadding=5 cellspacing=5>";
    echo "<thead>";
    echo "<tr>";
    echo "<th>ID</th>";
    echo "<th>Title</th>";
    echo "<th>description</th>";
    echo "<th>shortstory</th>";
    echo "<th>Feature Image</th>";
    echo "<th>status</th>";
    echo "<th></th>";
    echo "</tr>";
    echo "</thead>";
    echo "<tbody>";
    $sql="SELECT * FROM posts ORDER BY id DESC LIMIT 0,100";
    include("../connection.php");
    $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
    $count=mysqli_num_rows($qry);
    if($count>=1){
        echo "<h3>We have $count records.</h3>";
        while($row=mysqli_fetch_array($qry)){
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['title']."</td>";
            echo "<td>".$row['description']."</td>";
            echo "<td>".$row['shortstory']."</td>";
            echo "<td><img src=../uploads/".$row['featureimg']." width=200px></td>";
            echo "<td>".$row['status']."</td>";
            echo "<td> <a href=editdeletepost.php?id=".$row['id']."&action=edit>EDIT</a> | <a href=editdeletepost.php?id=".$row['id']."&action=delete>DELETE</a> </td>";
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