<?php
include("../model/employeedb.php");
session_start();
$error=0;
if(isset($_POST["login"]))
{
    if(empty($_POST["username"] || $_POST["pass"]))
    {
        echo "UserName and Password cannot be empty";
    }
    else
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->checkLogin("employee",$_POST["username"],$_POST["pass"],$conobj);

        if($results->num_rows > 0)
        {
            $_SESSION["username"]=$_POST["username"];
            $_SESSION["pass"]=$_POST["pass"];
            header("location:../view/empolyeeprofile.php");
        }
        else 
        {
            echo "Invalid Email or passowrd";
        }
    }
    
}
?>
