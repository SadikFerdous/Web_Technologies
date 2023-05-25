<html>
<link rel="stylesheet" href="../css/employeecss.css">
<form class="box3">
<center>
<?php
include("../model/employeedb.php");
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showCusCom("complain",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."Email : ".$myrow["email"]."<td>";
            echo"<tr>";
            echo"<td>"."Complain Box : ".$myrow["complain"]."<td>";
            echo"<tr>";
            echo"<td>"."<br>"."<td>";
            echo"<tr>";
        }
        echo "<table>";    
    }
else
    {
           echo "No data found";
    }
?>

<div class=link><a href="../view/empolyeeprofile.php">Click Here for Profile Page!</a></div>
<center>
</form>
</html>