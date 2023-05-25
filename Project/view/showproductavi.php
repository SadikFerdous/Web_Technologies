<html>
<head>
    <body>
<link rel="stylesheet" href="../css/admincss.css">

<div class="header">
    Product Name
<div>
<div class="boxshow">
<h2>Product List </h2><hr>
<form action="" method="POST">
<center>
<?php
include("../model/admindb.php");
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->productavi("product",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."Product Name : ".$myrow["productname"]."<td>";
            echo"<tr>";
            echo"<td>"."Quantity : ".$myrow["aop"]."<td>";
            echo"<tr>";
            echo"<td>"."<br>"."<td>";
            echo"<tr>";
        }
        echo "<table>";    
    }
else
    {
        echo "<br>";
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