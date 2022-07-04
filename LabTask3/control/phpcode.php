<?php
$unameError="";
if(isset($_POST["Submisson"]))
{
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $age=$_POST["age"];
    $email=$_POST["email"];
    $pass=$_POST["pass"];
    $file=$_POST["file"];
    if(is_numeric($fname) || is_numeric($lname))
    {
        $unameError="First name and Last name should not contain numerical value"."<br>";
    }
    else
    {
        echo "First Name : ".$fname."<br>";
        echo "Last Name : ".$lname."<br>";
    }

    echo "Age : ".$age."<br>";

    if(empty($_POST["designation"]))
    {
        echo "Designation must be selected"."<br>";
    }
    else
    {
        echo "Designation : ".$_POST["designation"]."<br>";
    }

    if(empty($_POST["java"]) && empty($_POST["php"]) && empty($_POST["c++"]))
    {
        echo "Preferred language must be selected"."<br>";
    }
    elseif(isset($_POST["java"]) && isset($_POST["php"]) && isset($_POST["c++"]))
    {
        echo "Preferred language ".$_POST["java"]." ".$_POST["php"]." ".$_POST["c++"]."<br>";
    }
    elseif(isset($_POST["java"]) && isset($_POST["php"]))
    {
        echo "Preferred language ".$_POST["java"]." ".$_POST["php"]."<br>";
    }
    elseif(isset($_POST["java"]) && isset($_POST["c++"]))
    {
        echo "Preferred language ".$_POST["java"]." ".$_POST["c++"]."<br>";
    }
    elseif(isset($_POST["php"]) && isset($_POST["c++"]))
    {
        echo "Preferred language ".$_POST["php"]." ".$_POST["c++"]."<br>";
    }
    elseif(isset($_POST["java"]))
    {
        echo "Preferred language ".$_POST["java"]."<br>";
    }
    elseif(isset($_POST["php"]))
    {
        echo "Preferred language ".$_POST["php"]."<br>";
    }
    elseif(isset($_POST["c++"]))
    {
        echo "Preferred language ".$_POST["c++"]."<br>";
    }

    if(empty($email))
    {
        echo "Email should be empty"."<br>";
    }
    else
    {
        echo "Email : ".$email."<br>";
    }

    if(strlen($pass)<6)
    {
        echo "Password should be more than 6 characterss"."<br>";
    }
    else
    {
        echo "Password : ".$pass."<br>";
    }

    echo "File : ".$file."<br>";


    $filecontents=file_get_contents("../data/data.json",true);
    $arrphp=json_decode($filecontents);
    $myarr=array(
        "FirstName"=>$fname,
        "LastName"=>$lname,
        "Age"=>$age,
        "Designation"=>$_POST["designation"],
        //"Preferred language"=>$_POST["java"] ." ". $_POST["php"]." ".$_POST["c++"] ,
        "Email"=>$email,
        "Password"=>$pass,
        "File"=>$file
    );
    $arrphp[]=$myarr;
    $jsonarr=json_encode($arrphp,JSON_PRETTY_PRINT);
    if(file_put_contents("../data/data.json",$jsonarr))
    {
        echo "Data stored<br>";
    }
    else
    {
        echo "Data is not store<br>";
    } 
    
    //$mycontents=file_get_contents("../data/data.json",true)
	//$phpstr=json_decode($mycontents);
    //echo "File Output".$phpstr[0]->FirstName;

}
?>