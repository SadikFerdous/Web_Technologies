<?php
include("../model/employeedb.php");
$productname=$_POST["productname"];

$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->suggestProductByName("product","$productname",$conobj);
if($results->num_rows > 0)
    {
  
        while($myrow=$results->fetch_assoc())
        { 
            echo $myrow["productname"];
        }
    
    }

?>