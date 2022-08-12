<?php
include("../model/mydb.php");
session_start();
$error=0;
if(isset($_POST["login"]))

{
    if(empty($_POST["email"]) && empty($_POST["pass"]))
    {
        echo "Email and passowrd cannot be empty";
    }
    else
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->checkLogin("employee",$_POST["email"],$_POST["pass"],$conobj);

        if($results->num_rows > 0)
        {
            $_SESSION["email"]=$_POST["email"];
            $_SESSION["pass"]=$_POST["pass"];
            header("location:../view/profile.php");
        }
        else 
        {
            echo "Invalid Email or passowrd";
        }
    } 
}
?>