<html>
    <body>
        <center>
<?php
include("../model/employeedb.php");

if(isset($_POST["showall"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showAllCus("customer",$conobj);
if($results->num_rows > 0)
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<table bgcolor=#F0FFF0>";
        echo"<tr color=#191919>";
        echo"<th>"."User Name : "."<th>";
        echo"<th>"."Password : "."<th>";
        echo"<th>"."Email : "."<th>";
        echo"<th>"."Gender : "."<th>";
        echo"<th>"."Address : "."<th>";

        echo"<tr>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr bgcolor=white>";
            echo"<td>".$myrow["fname"]."<td>";  
            echo"<td>".$myrow["pass"]."<td>";
            echo"<td>".$myrow["mail"]."<td>";
            echo"<td>".$myrow["gender"]."<td>";  
            echo"<td>".$myrow["adres"]."<td>";
            echo"<tr>";

        }
        echo "<table>";    
    }
else
    {
           echo "No data found";
    }

}

if(isset($_POST["search"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchCusByEmail("customer",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
{
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<br>";
    echo "<table bgcolor=#F0FFF0>";
    echo"<tr color=#191919>";
    echo"<th>"."User Name : "."<th>";
    echo"<th>"."Password : "."<th>";
    echo"<th>"."Email : "."<th>";
    echo"<th>"."Gender : "."<th>";
    echo"<th>"."Address : "."<th>";

    echo"<tr>";
    while($myrow=$results->fetch_assoc())
    {    
        echo"<tr bgcolor=white>";
        echo"<td>".$myrow["fname"]."<td>";  
        echo"<td>".$myrow["pass"]."<td>";
        echo"<td>".$myrow["mail"]."<td>";
        echo"<td>".$myrow["gender"]."<td>";  
        echo"<td>".$myrow["adres"]."<td>";
        echo"<tr>";

    }
    echo "<table>";    
}
else
{
       echo "No data found";
}
}

if(isset($_POST["delete"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->deleteCus("customer",$_POST["fname"],$conobj);
    if($results === TRUE)
    {
        header("Location:../view/empcusviewdelete.php");
    }
    else
    {
        echo "Cannot Deleted".$conobj->error;
    }
}
?>
<center>

    <body>
    <html>