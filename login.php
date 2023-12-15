<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
<?php
if(isset($_POST["login"])){
    //capturing the forms data
    $uname=$_POST["username"];
    $upass=$_POST["password"];
    $remember=$_POST["remember"];
    if(!empty($uname) AND !empty($upass))
    {
        if(strlen($uname)>=5){
            if($uname=="admin" && $upass=="admin123"){
                //setting the username and password cookie
                setcookie("username", $uname, time()+60*60*24*15,"/");
                setcookie("password", $upass, time()+60*60*24*15,"/");

                //redirect to admin/dashboard.php

                $_SESSION["username"]=$uname;
                $_SESSION["accesstime"]=date("YmdhisaD");
                header("Location:admin/dashboard.php");
            }
            else{
                echo "Creadential not match";
            }
        }
        else{
            echo "Username must be greater than or equal 5 char";
        }
    }
    else{
        echo "Username AND password is required";
    }
}
?>    
<form method="post">
        <fieldset>
            <legend>User Login</legend>
            <input type="text" value="<?php if(isset($_COOKIE["username"])){echo $_COOKIE["username"]; }?>" name="username" placeholder="Username"><br>
            <input type="password"  value="<?php if(isset($_COOKIE["password"])){echo $_COOKIE["password"]; }?>" name="password" placeholder="Password"><br>
            <input type="checkbox" name="remember" value=1>Remember Me <br>
            <input type="submit" name="login" value="Login">
            <br>

</fieldset>

</form>
    
</body>
</html>