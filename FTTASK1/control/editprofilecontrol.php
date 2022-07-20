<?php
session_start();
include("../model/mydb.php");
$email=$_SESSION["email"];
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchUserByEmail("employee",$email,$conobj);
if($results->num_rows > 0)
    {
        while($myrow=$results->fetch_assoc())
        { 
            $fname=$myrow["fname"];
            $lname=$myrow["lname"];
            $age=$myrow["age"];
            $des=$myrow["designation"];
            $pre=$myrow["planguage"];
            $email=$myrow["email"];
            $pass=$myrow["password"];
            $file=$myrow["picture"];
        }
    }

if(isset($_POST["update"]))
{
    if(isset($_POST["java"]))
    {
        $pre=$_POST["java"];
    }

    if(isset($_POST["php"]))
    {
        $pre=$_POST["php"];
    }

    if(isset($_POST["c++"]))
    {
        $pre=$_POST["c++"];
    }

    if(isset($_POST["java"]) && isset($_POST["php"]))
    {
        $pre=$_POST["java"].",".$_POST["php"];
    }

    if(isset($_POST["java"]) && isset($_POST["c++"]))
    {
        $pre=$_POST["java"].",".$_POST["c++"];
    }
    
    if(isset($_POST["php"]) && isset($_POST["c++"]))
    {
        $pre=$_POST["php"].",".$_POST["c++"];
    }
    
    if(isset($_POST["java"]) && isset($_POST["php"]) && isset($_POST["c++"]))
    {
        $pre=$_POST["java"].",".$_POST["php"].",".$_POST["c++"];
    }


    $target_dir = "../uploads/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        $file=basename( $_FILES["fileToUpload"]["name"]);
    } 


    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->updateUser("registration",$_POST["fname"],$_POST["lname"],$_POST["age"],$_POST["designation"],
    $pre,$_POST["email"],$_POST["password"],$file,$conobj);

    if($results === TRUE)
    {
        echo "Updated";
    }
    else
    {
        echo "Failed to updated".$conobj->error;
    }
}

if(isset($_POST["delete"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->deleteUser("registration",$email,$conobj);
    if($results === TRUE)
    {
        header("Location:../control/logout.php");
    }
    else
    {
        echo "Cannot Deleted".$conobj->error;
    }
}

?>