<?php
include("../model/mydb.php");
$firstname=$_POST["firstname"];
//echo "your name is ".$firstname;

$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchUserByName("employee",$firstname,$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        { 
            echo "This name is already exist ";
        }
        echo "<table>";
        
    }
else
    {
        echo "your name is ".$firstname;
    }
?>