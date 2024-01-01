<?php

function allCategoryDropDown()
{
    echo "<select size=1 name=category_id>";
    $sql = "SELECT * FROM categories ";
    include("../connection.php");
    $qry=mysqli_query($conn, $sql) or die("Unable to query the data");
    $countr=mysqli_num_rows($qry);
    while($row=mysqli_fetch_array($qry))
    {
    if($countr>=1){
        $cid=$row['id'];
        $cname=$row['name'];
        echo "<option value=$cid>$cname</option>";


    }
}
    
    echo "</select>";
}

?>