<?php
session_start();
$error=0;
if(isset($_POST["login"]))

{
    if(empty($_POST["email"]) && empty($_POST["pass"]))
    {
        echo "Email and passowrd cannot be empty";
    }
    else
    {
        $mydata=file_get_contents("../data/data.json");
        $phpdata=json_decode($mydata);
        foreach($phpdata as $data)
        {
            if($_POST["email"]==$data->Email && $_POST["pass"]==$data->Password)
            {
                $_SESSION["email"]=$_POST["email"];
                $_SESSION["pass"]=$_POST["pass"];
                header("location:../view/profile.php");
            }

            else
            {
                $error=1;
            }
        }
    }
    if($error==1)
    {
        echo "Invalid email or password";
    }  
}
?>