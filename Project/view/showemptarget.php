<html>
<head>
    <body>
<link rel="stylesheet" href="../css/admincss.css">

<div class="header">
    Employee Target
<div>
<div class="boxshow">
<h2>Employee Target List </h2><hr>
<form action="" method="POST">
<center>
<?php
include("../model/admindb.php");
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showemptarget("target",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."User Name : ".$myrow["username"]."<td>";
            echo"<tr>";
            echo"<td>"."Date : ".$myrow["date"]."<td>";
            echo"<tr>";
            echo"<td>"."Amount : ".$myrow["number"]."<td>";
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
<div class="link">  
<a href="../view/adminprofile.php">Click Here for Profile Page!</a>
</div>
    </center>
</form>
<div>
    </body>
</html>