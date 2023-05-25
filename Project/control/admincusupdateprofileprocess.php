<?php
include("../model/employeedb.php");
if(isset($_POST["search"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->searchCusByEmail("customer",$_POST["searchdata"],$conobj);
    if($results->num_rows > 0)
        {
            while($myrow=$results->fetch_assoc())
            {    
                $fname=$myrow["fname"];
                $pass=$myrow["pass"];
                $mail=$myrow["mail"];
                $gender=$myrow["gender"];
                $adres=$myrow["adres"];
            }    
        }
    else
        {
            echo "No data found";
        }
}
if(isset($_POST["update"]))
{
    if(empty($_POST["fname"]) || empty($_POST["gender"]) || empty($_POST["mail"]) 
    || empty($_POST["adres"]) || empty($_POST["pass"]))
    {
        echo "Fill up all the box";
    }
    
    else
    {
        $mydb=new db();
        $conobj=$mydb->openCon();    
        $results=$mydb->updateCus("customer",$_POST["fname"],$_POST["gender"],$_POST["mail"],$_POST["adres"],$_POST["pass"],$conobj);
        if($results === TRUE)
        {
            echo "Updated";
        }
        else
        {
            echo "Failed to updated".$conobj->error;
        }
    } 
}
?>