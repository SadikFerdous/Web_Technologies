<html>
<head>
    <body>
<link rel="stylesheet" href="../css/admincss.css">

<div class="header">
    Payment History
<div>
<div class="boxshow">
<h2>Payment History List </h2><hr>
<form action="" method="POST">
<center>
<?php
include("../model/admindb.php");
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showPayment("customerorder",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."Email : ".$myrow["email"]."<td>";
            echo"<tr>";
            echo"<td>"."Payment Method : ".$myrow["payment"]."<td>";
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