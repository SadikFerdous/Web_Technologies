<?php
include("../model/admindb.php");
/*global $hello;*/
if(isset($_POST["search"]))
{
    $mydb=new db();
    $conobj=$mydb->openCon();
    $results=$mydb->searchEmpByName("employee",$_POST["searchdata"],$conobj);
    if($results->num_rows > 0)
        {
            while($myrow=$results->fetch_assoc())
            {    
                $firstname=$myrow["firstname"];
                $lastname=$myrow["lastname"];
                $username=$myrow["username"];
                $pass=$myrow["pass"];
                $email=$myrow["email"];
                $gender=$myrow["gender"];
                $preaddress=$myrow["preaddress"];
                $peraddress=$myrow["peraddress"];
                $date=$myrow["date"];
                $religion=$myrow["religion"];
                $bloodgroup=$myrow["bloodgroup"];
                $nationality=$myrow["nationality"];
                $nidnumber=$myrow["nidnumber"];
                $maritialstatus=$myrow["maritialstatus"];
                $number=$myrow["number"];
                $designation=$myrow["designation"];
                $date2=$myrow["date2"];
                $file=$myrow["file"];
            }    
        }
    else
        {
            echo "No data found";
        }
}


if(isset($_POST["update"]))
{
    if(empty($_POST["firstname"]) || empty($_POST["lastname"]) || empty($_POST["username"]) || empty($_POST["pass"]) 
    || empty($_POST["email"]) || empty($_POST["gender"]) || empty($_POST["preaddress"]) || empty($_POST["peraddress"]) 
    || empty($_POST["date"]) || empty($_POST["religion"]) || empty($_POST["bloodgroup"]) || empty($_POST["nationality"]) 
    || empty($_POST["nidnumber"]) || empty($_POST["maritialstatus"]) || empty($_POST["number"]) || empty($_POST["designation"])
    || empty($_POST["date2"]))
    {
        echo "Fill up all the box";
    }

    else if($_FILES["fileToUpload"]["name"]=="")
    {
        $mydb=new db();
        $conobj=$mydb->openCon();    
        $results=$mydb->updateEmpNoFile("employee",$_POST["firstname"],$_POST["lastname"],$_POST["username"],$_POST["pass"],$_POST["email"],
        $_POST["gender"],$_POST["preaddress"],$_POST["peraddress"],$_POST["date"],$_POST["religion"],$_POST["bloodgroup"],$_POST["nationality"],
        $_POST["nidnumber"],$_POST["maritialstatus"],$_POST["number"],$_POST["designation"],$_POST["date2"],$conobj);
        if($results === TRUE)
        {
            echo "Updated";
        }
        else
        {
            echo "Failed to updated".$conobj->error;
        }

    }
    else
    {
        $target_dir = "../uploads/";
        $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);
        if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
        {
            $file=basename( $_FILES["fileToUpload"]["name"]);
        } 
        $mydb=new db();
        $conobj=$mydb->openCon();    
        $results=$mydb->updateEmp("employee",$_POST["firstname"],$_POST["lastname"],$_POST["username"],$_POST["pass"],$_POST["email"],
        $_POST["gender"],$_POST["preaddress"],$_POST["peraddress"],$_POST["date"],$_POST["religion"],$_POST["bloodgroup"],$_POST["nationality"],
        $_POST["nidnumber"],$_POST["maritialstatus"],$_POST["number"],$_POST["designation"],$_POST["date2"],$file,$conobj);
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