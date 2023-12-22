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
echo "<h1>EDIT DELETE USERS Users</h1>";
//capturing the data from the url
if(isset($_GET['id'])&isset($_GET['action']))
{
    $id=$_GET['id'];
    $action=$_GET['action'];
    switch($action){
        case 'edit':{
            echo "You are editing the record.,";
            break;
        }
        
        case 'delete':
            {

                $sql="DELETE FROM users where id=$id";
                include("../connection.php");
                $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
                if($qry){
                    header("Location:user.php?msg=record deleted successfully");
                }

                 break;
            }
        default:{
            echo "Unable to perform the task";
            break;
        }
    }

}
else{
    //redirect to user.php
    header("Location:user.php");
}

    require("inc_footer.php");
    ?>
</body>
</html>