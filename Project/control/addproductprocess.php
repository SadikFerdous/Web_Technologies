<?php
include ("../model/employeedb.php");
$error = 0;
if(isset($_POST["Submisson"]))
{
    $productname=$_POST["productname"];
    $aop=$_POST["aop"];
    $price=$_POST["price"];

    if(empty($productname))
    {
        echo "<b> Product Name cannot empty </b>"."<br>";
        $error = 1;
    }
    elseif(is_numeric($productname))
    {
        echo "<b> Product Name should not contain only numerical value </b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Product Name : ".$productname."<br>";

    }

    if(empty( $aop))
    {
        echo "<b> Number of Product should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Number Of Product : ". $aop."<br>";
    }
    if(empty($price))
    {
        echo "<b>Price should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Price : ".$price."<br>";
    }
    
    if($error == 0 )
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->insertProduct("product",$productname,$aop,$price,$conobj);
    }
    else
    {
        echo "<br><h3>Failed!!!</h3>";
    }
 }
 ?>

