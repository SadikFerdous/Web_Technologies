<?php
$uname=$_SESSION["username"];
$cookie='visit';
setcookie($uname,$cookie, time()+86400);
if(!empty($uname))
{
    if(isset($_COOKIE[$uname])){
        echo "Welcome Back ".$uname;
    }
    else{
        echo "Welcome ".$uname;
    }
}
?>

