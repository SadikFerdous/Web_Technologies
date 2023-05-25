<?php
include("../model/employeedb.php");

if(isset($_POST["search"]))
{
     $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->searchProductByName("product",$_POST["pid"],$conobj);
       if($results->num_rows > 0)
        {
            while($myrow=$results->fetch_assoc())
                {    
                    $productname=$myrow["productname"];
                    $aop=$myrow["aop"];
                    $price=$myrow["price"];
                }    
        }
        else
        {
          echo "No data found";
        }
}

if(isset($_POST["update"]))      
{
    if(empty($_POST["productname"]) || empty($_POST["aop"]) || empty($_POST["price"]))
    {
        echo "The Text Field cannot be empty";
    }
    
    else
    {
            
            $mydb=new db();
            $conobj=$mydb->openCon();    
            $results=$mydb->updateProduct("product",$_POST["productname"],$_POST["aop"],$_POST["price"],$conobj);
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

