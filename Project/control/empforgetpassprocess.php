<?php
include("../model/employeedb.php");
session_start();
$error=0;

if(isset($_POST["enter"]))
{
    if(empty($_POST["username"] || $_POST["email"]))
    {
        echo "UserName and Email cannot be empty";
    }
    else
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->checkForgetPassword("employee",$_POST["username"],$_POST["email"],$conobj);
        if($results->num_rows > 0)
        {
            $_SESSION["username"]=$_POST["username"];
            header("location:../view/empforgetchangepass.php");
        }
        else 
        {
            echo "Invalid User Name or Email";
        }
    }
}
?>
