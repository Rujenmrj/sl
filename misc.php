<?php
/*
#Author: Dharma Raj Poudel
#Author Url: drpoudel.com.np
#Author Email: dharmarajpoudel@gmail.com
*/ 

//Declaring the variable
$a=20;
$b=true;
$c=array("1","2","3","4","5");
$d="Dharma Raj Poudel";
$e='Trinity College';
echo "<hr>";
echo gettype($a);
echo "<br>";
echo gettype($b);
echo "<br>";
echo gettype($c);
echo "<br>";
echo gettype($d);
echo "<br>";
echo gettype($e);
echo "<br>";

//destroying the variable
unset($a,$b);
echo $a;
echo "Value of e is $e";
echo "<br>";
echo 'Value of e is $e';
echo "<br>";
echo 'Value of e is '.$e;
echo "<br>";
$today=date("l");
echo $today;
if($today=="Saturday"){
    echo "<br>Hurray Its good Holiday";
}
else if($today=="Firday"){
    echo "<br>Hurray Its good Friday";
}
else{
    echo "<br>Its just regular colelge days";
}


//same program from switch case
switch($today){
    case "Friday":{
        echo "<br>Hurray Its good Friday";
        break;
    }
    case "Saturday":{
        echo "<br>Hurray Its good Holiday";
        break;
    }
    default:{
        echo "<br>Its just regular colelge days";
        break;
    }
}


?>