<?php
include("../model/employeedb.php");
$email=$_POST["mail"];

$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchCusByEmail("customer",$_POST["mail"],$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        { 
            echo "User email exist in database";
        }
        echo "<table>";
        
    }
else
    {
        echo "User email doesn't exist";
    }
?>