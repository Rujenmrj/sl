<?php
include("session.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Category</title>
</head>
<body>
    <?php
    include("inc_header.php");
//check the form is submitted or not
if(isset($_POST["submit"])){
    //capturing the data
    $cname=$_POST['name'];
    $description=$_POST['description'];
    $name=$_FILES["thumb"]["name"];
    $size=$_FILES["thumb"]["size"];
    $type=$_FILES["thumb"]["type"];
    $tmpname=$_FILES["thumb"]["tmp_name"];
    $updlocation="../uploads/".$name;

    //Checking the file is jpeg or jpg or gif or png
    if($type=="image/jpeg" || $type=="image/jpg" || $type=="image/png" || $type=="image/gif"){
        $sql="INSERT into categories(name, description, thumb, status)VALUES('$cname','$description', '$name', 1 )";
        include("../connection.php");
        $qry=mysqli_query($conn, $sql) or die(mysqli_error($conn));
        if($qry){
            //uploading the file to uploads folder 
            move_uploaded_file($tmpname, $updlocation);
            header("Location:category.php");
        }

    }
    else{
        echo "Un Supported file Format";
    }
}

    ?>
    <form method="POST" action="" name="addcategory" enctype="multipart/form-data">
        <fieldset>
            <legend>Add Category</legend>
            <input type="text" name="name" Placeholder="Category Name"/>
            <br>
            <input type="text" name="description" Placeholder="Type Description"/>
            <br>
            <input type="file" name="thumb">
            <br>
            <input type="submit" name="submit" value="Add Category">


</fieldset>

</form>

    <?php
   

    require("inc_footer.php");
    ?>
</body>
</html>