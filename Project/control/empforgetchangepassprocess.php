<?php
session_start();
include("../model/employeedb.php");
$username=$_SESSION["username"];

if(isset($_POST["submit"]))
{
    if(empty($_POST["newpass"]))
    {
        echo "New Password cannot be empty";
    }

    elseif(isset($_POST["newpass"]))
    {     
        $mydb=new db();
        $conobj=$mydb->openCon();
        $results=$mydb->updateNewPass("employee",$username,$_POST["newpass"],$conobj);
        if($results === TRUE)
        {
            echo "";
        }
        else{
            echo "Password changed Failed".$conobj->error;;
        }
    }
}
?>