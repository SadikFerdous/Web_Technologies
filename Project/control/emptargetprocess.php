<?php
session_start();
include("../model/employeedb.php");
$username=$_SESSION["username"];
$error = 0;

if(isset($_POST["Submisson"]))
{
    $date=$_POST["date"];
    $number=$_POST["number"];

    if(empty($date))
    {
        echo "<b>Date should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Date : ".$date."<br>";
    }

    if(empty($number))
    {
        echo "<b>Amount should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Amount : ".$number."<br>";
    }

    if($error == 0 )
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->insertDailytarget("target",$username,$date,$number,$conobj);
    }
    else
    {
        echo "<br><h3>Update Failed!!!</h3>";
    }
}
?>