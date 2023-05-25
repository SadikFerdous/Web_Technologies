<?php
include("../model/admindb.php");

if(isset($_POST["showall"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showAllCus("customer",$conobj);
if($results->num_rows > 0)
    {
        echo "<center>";
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

        echo "<table bgcolor=black>";
        echo"<tr bgcolor=white>";
        echo"<th>"."User Name "."<th>";
        echo"<th>"."Password "."<th>";
        echo"<th>"."Email "."<th>";
        echo"<th>"."Gender "."<th>";
        echo"<th>"."Address "."<th>";
        echo"<tr>";
        while($myrow=$results->fetch_assoc())
        {
            echo"<tr  bgcolor=white>";
            echo"<td>".$myrow["fname"]."<td>";
            echo"<td>".$myrow["pass"]."<td>";
            echo"<td>".$myrow["mail"]."<td>";
            echo"<td>".$myrow["gender"]."<td>";
            echo"<td>".$myrow["adres"]."<td>";
        }
        echo "</center>";
        echo "</table>";    
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
$results=$mydb->searchEmpByEmail("customer",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<center>";
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

        echo "<table bgcolor=black>";
        echo"<tr bgcolor=white>";
        echo"<th>"."User Name "."<th>";
        echo"<th>"."Password "."<th>";
        echo"<th>"."Email "."<th>";
        echo"<th>"."Gender "."<th>";
        echo"<th>"."Address "."<th>";
        echo"<tr>";
        while($myrow=$results->fetch_assoc())
        {
            echo"<tr  bgcolor=white>";
            echo"<td>".$myrow["fname"]."<td>";
            echo"<td>".$myrow["pass"]."<td>";
            echo"<td>".$myrow["mail"]."<td>";
            echo"<td>".$myrow["gender"]."<td>";
            echo"<td>".$myrow["adres"]."<td>";
        }
        echo "</table>";    
        echo "</center>";
    }
else
    {
           echo "No data found";
    }
}

if(isset($_POST["delete"]))
{
    if(empty($_POST["fname"]))
    {
        echo "Name Cannot be Empty";
    }

    else
    {
        $mydb=new db();
        $conobj=$mydb->openCon();
        $results=$mydb->deleteCus("customer",$_POST["fname"],$conobj);
        if($results === TRUE)
        {
            header("Location:../view/admincusviewdelete.php");
        }
        else
        {
            echo "Cannot Deleted".$conobj->error;
        }
    } 
}
?>