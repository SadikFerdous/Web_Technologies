<?php
include("../model/admindb.php");
$searchdata=$_POST["searchdata"];
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchProduct("product",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."<br>"."<td>";
            echo"<tr>";
            echo"<td>"."Product Name : ".$myrow["productname"]."<td>";
            echo"<tr>";
            echo"<td>"."Quantity : ".$myrow["aop"]."<td>";
            echo"<tr>";
        }
        echo "<table>";    
    }
else
    {
        echo "<br>";
    }
?>