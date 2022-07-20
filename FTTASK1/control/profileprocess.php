<?php
include("../model/mydb.php");
session_start();
$email=$_SESSION["email"];
if(isset($_POST["showall"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showAll("employee",$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        { 
            echo"<tr>";
            echo"<td>".$myrow["fname"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["lname"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["age"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["designation"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["planguage"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["email"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["password"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["picture"]."<td>";
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
$results=$mydb->searchUserByInterest("employee",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<table>";
        while($myrow=$results->fetch_assoc())
        { 
            echo"<tr>";
            echo"<td>".$myrow["fname"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["lname"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["age"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["designation"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["planguage"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["email"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["password"]."<td>";
            echo"<tr>";
            echo"<td>".$myrow["picture"]."<td>";
            echo"<tr>";
        }
        echo "<table>";
        
    }
else
    {
           echo "No data found";
    }
}
?>