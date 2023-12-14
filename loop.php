<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Looping concept in php</title>
</head>
<body>

<?php
$one=132.95;
echo "<table border=\"1\" >";
echo "<tr>";
echo "<td>Price</td><td>Value</td>";
echo "</tr>";
for($i=1;$i<=10;$i++){
    echo "<tr>";
    echo "<td>$i</td>";
    echo "<td>".$i*$one."</td>";
    echo "</tr>";
}
echo "</table>";

$name=array("T","R","I","N","I","T","Y");
for($i=0;$i<sizeof($name);$i++){
    for($j=0;$j<=$i;$j++){
        echo $name[$j]."\t";
    }
    echo "<br>";
}
//associative array
$names=array("Sandhya"=>21,"Anita"=>20,"Alish"=>22,"Rujen"=>20);
echo "<bR>";
echo "Sandhya age is ".$names["Sandhya"];
//printing all names and ages at once
foreach($names as $k=>$v){
    echo $k. " age  is ".$v. "<br>";
}

$names=array(
    "Sandhya"=>array("age"=>21,"color"=>"WHITE","academic"=>"BCA"),
    "Anita"=>array("age"=>20,"color"=>"RED","academic"=>"MCA"),
    "Alish"=>array("age"=>19,"color"=>"BLCAK","academic"=>"MBA"),
    "Rujen"=>array("age"=>22,"color"=>"WHITE","academic"=>"MSCIT")
);
echo "<br>";
echo  $names["Alish"]["academic"];

?>



    
</body>
</html>
