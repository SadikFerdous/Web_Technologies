<?php
include("../model/employeedb.php");

if(isset($_POST["showall"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showAllProduct("product",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."Product Name : ".$myrow["productname"]."<td>";
            echo"<tr>";
            echo"<td>"."Amount of Product : ".$myrow["aop"]."<td>";
            echo"<tr>";
            echo"<td>"."Price : ".$myrow["price"]."<td>";
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

}

if(isset($_POST["search"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchProductByName("product",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr>";
            echo"<td>"."Product Name : ".$myrow["productname"]."<td>";
            echo"<tr>";
            echo"<td>"."Amount of Product : ".$myrow["aop"]."<td>";
            echo"<tr>";
            echo"<td>"."Price : ".$myrow["price"]."<td>";
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
}

if(isset($_POST["delete"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->deleteProduct("product",$_POST["productname"],$conobj);
    if($results === TRUE)
    {
        header("Location:../view/empproductviewdelete.php");
    }
    else
    {
        echo "Cannot Deleted".$conobj->error;
    }
}
?>
