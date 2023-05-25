<?php
include("../model/admindb.php");
$searchdata=$_POST["searchdata"];

$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchEmpByName("employee",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        { 
            echo "User exist";
        }
        echo "<table>";
        
    }
else
    {
        echo "User doesnot exist";
    }
?>