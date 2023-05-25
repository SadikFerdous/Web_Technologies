<?php
include("../model/employeedb.php");
$error = 0;
if(isset($_POST["Submisson"]))
{
    $fname=$_POST["fname"];
    $mail=$_POST["mail"];
    $adres=$_POST["adres"];
    $pass=$_POST["pass"];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    
    //First Name 
    if(empty($fname))
    {
        echo "<b> First name cannot empty </b>"."<br>";
        $error = 1;
    }
    elseif(is_numeric($fname))
    {
        echo "<b> First name should not contain only numerical value </b>"."<br>";
        $error = 1;
    }
    elseif(!preg_match("/[A-Z]/",$fname[0]))
    {
        echo "<b> First name first letter should be capital</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "First Name : ".$fname."<br>";
    }
    
     //Gender
     if(empty($_POST["gender"]))
     {
         echo "<b>Gender must be selected</b>"."<br>";
         $error = 1;
     }
     else
     {
         echo "Gender : ".$_POST["gender"]."<br>";
     }


    //Email
    if(empty($mail))
    {
        echo "<b>Email should be empty</b>"."<br>";
        $error = 1;
    }
    elseif(!preg_match ($pattern, $mail))
    {
        echo "<b>Email should be like abcd@gmail.com</b>"."<br>";
        $error = 1;
    } 
    else
    {
        echo "Email : ".$mail."<br>";
    }

    //Present Address
    if(empty($adres))
    {
        echo "<b>Present Address should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Present Address : ".$adres."<br>";
    }
 

    //Password
    if(empty($pass))
    {
        echo "<b>Password cannot empty</b>"."<br>";
        $error = 1;
    }
    elseif(strlen($pass)<6)
    {
        echo "<b>Password should be more than 6 characters</b>"."<br>";
        $error = 1;
    }
    elseif(!preg_match("/[\'^£$%&*()}{@#~?><>,|=_+¬-]/",$pass))
    {
        echo "<b>Password must contain special character"."</b><br>";
        $error = 1;
    }
    else
    {
        echo "Password : ".$pass."<br>";
    }

    //Database conn
    if($error == 0 )
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->insertCustomer("customer",$fname,$_POST["gender"],$mail,$adres,$pass,$conobj);
    }
    else
    {
        echo "<br><h3>Registration Failed!!!</h3>";
    }
}
?>