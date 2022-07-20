<?php
class db
{
    function openCon()
    {
        $dbservername = "localhost"; 
        $dbusername = "root"; 
        $dbpassword = ""; 
        $dbname="labtask";
        $conn= new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
        
        if($conn->connect_error)
        {
            echo "Cant create con obj";
        }
        return $conn;
    }

    function insertUser($tablename,$fname,$lname,$age,$des,$pre,$email,$pass,$file,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,lname,age,designation,planguage,email,password,picture) VALUES ('$fname','$lname','$age','$des','$pre','$email','$pass','$file')";
        if($conn->query($sqlstr))
        {
            echo "Data Inserted";
        }
        else 
        {
            echo "Can insert".$conn->error;
        }
    }
    
    function checkLogin($tablename,$email,$pass,$conn)
    {
        $sqlstr="SELECT email,password FROM $tablename WHERE email='$email' AND password='$pass'";
        return $conn->query($sqlstr);
    }

    function showAll( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

    function searchUserByInterest($tablename,$des,$conn)
    {
        $sqlstr="SELECT * FROM $tablename WHERE designation='$des'";
        return $conn->query($sqlstr);
    }

    function searchUserByEmail($tablename,$email,$conn)
    {
        $sqlstr="SELECT * FROM $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }

    function updateUser($tablename,$fname,$lname,$age,$des,$pre,$email,$pass,$file,$conn)
    {
        $sqlstr="UPDATE $tablename SET fname='$fname',lname='$lname',age='$age',designation='$des',
        prelanguage='$pre',pass='$pass',file='$file' WHERE email='$email'";
        return $conn->query($sqlstr);
    }

    function deleteUser($tablename,$email,$conn)
    {
        $sqlstr="DELETE from $tablename WHERE email='$email'";
        return $conn->query($sqlstr);
    }

    function connClose()
    {
        $conn->close();
    }
}
?>