<?php
session_start();
include("../model/employeedb.php");
$username=$_SESSION["username"];


if(isset($_POST["submit"]))
{
    if(empty($_POST["pass"]) || empty($_POST["newpass"]))
    {
        echo "Password or New Password cannot be empty";
    }

    elseif(isset($_POST["pass"]) && isset($_POST["newpass"]))
    {     
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->checkpassword("employee",$_POST["pass"],$conobj);
        if($results->num_rows > 0)
        {
            $mydb=new db();
            $conobj=$mydb->openCon();
            $results=$mydb->updateUser("employee",$username,$_POST["newpass"],$conobj);
        }
        else 
        {
            echo "Invalid passowrd";
        }

    // echo "Password changed succesfully";
    }
}
?>