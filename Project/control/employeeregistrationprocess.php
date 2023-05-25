<?php
include("../model/employeedb.php");
$error = 0;
if(isset($_POST["Submisson"]))
{
    $fname=$_POST["firstname"];
    $lname=$_POST["lastname"];
    $uname=$_POST["username"];
    $pass=$_POST["pass"];
    $email=$_POST["email"];
    $pre=$_POST["preaddress"];
    $per=$_POST["peraddress"];
    $national=$_POST["nationality"];
    $nid=$_POST["nidnumber"];
    $phnnum=$_POST["number"];
    $birthdate=$_POST["date"];
    $joindate=$_POST["date2"];
    $pattern = "^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^";
    
    //First Name and Last Name
    if(empty($fname) || empty($lname))
    {
        echo "<b> First name and Last name cannot empty </b>"."<br>";
        $error = 1;
    }
    elseif(is_numeric($fname) || is_numeric($lname))
    {
        echo "<b> First name and Last name should not contain only numerical value </b>"."<br>";
        $error = 1;
    }
    elseif(!preg_match("/[A-Z]/",$fname[0])|| !preg_match("/[A-Z]/",$lname[0]))
    {
        echo "<b> First name and Last name first letter should be capital</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "First Name : ".$fname."<br>";
        echo "Last Name : ".$lname."<br>";
    }


    //User Name
    if(empty($uname))
    {
        echo "<b> User Name cannot empty </b>"."<br>";
        $error = 1;
    }
    elseif(is_numeric($uname))
    {
        echo "<b>User Name should not contain only numerical value</b>"."<br>";
        $error = 1;
    }
    elseif(preg_match("/[A-Z]/" ,$uname))
    {
       
        echo "<b>User Name should not contain capital letter</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "User Name : ".$uname."<br>";

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


    //Email
    if(empty($email))
    {
        echo "<b>Email should be empty</b>"."<br>";
        $error = 1;
    }
    elseif(!preg_match ($pattern, $email))
    {
        echo "<b>Email should be like abcd@gmail.com</b>"."<br>";
        $error = 1;
    } 
    else
    {
        echo "Email : ".$email."<br>";
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


    //Present Address
    if(empty($pre))
    {
        echo "<b>Present Address should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Present Address : ".$pre."<br>";
    }


    //Permanent Address
    if(empty($per))
    {
        echo "<b>Permanent Address should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Permanent address : ".$per."<br>";
    }


    //Date of Birth
    if(empty($birthdate))
    {
        echo "<b>Date of Birth should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Date of Birth : ".$birthdate."<br>";
    }


    //Religion
    if(empty($_POST["religion"]))
    {
        echo "<b>Religion must be selected</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Religion : ".$_POST["religion"]."<br>";
    }


    //Blood Group
    if(empty($_POST["bloodgroup"]))
    {
        echo "<b>Blood Group must be selected</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Blood Group : ".$_POST["bloodgroup"]."<br>";
    }


    //Nationality
    if(empty($national))
    {
        echo "<b>Nationlity should not be empty</b>"."<br>";
        $error = 1;
    }
    elseif(preg_match("/[0-9]/",$national))
    {
        echo "<b>Nationality should contain only string</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Nationality : ".$national."<br>";
    }

    //NID number
    if(empty($nid))
    {
        echo "<b>NID number should not be empty</b>"."<br>";
        $error = 1;
    }
    elseif(strlen($nid)>10)
    {
        echo "<b>NID number should be 10 characters</b>"."<br>";
        $error = 1;
    }
    elseif(strlen($nid)<10)
    {
        echo "<b>NID number should be 10 characters</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "NID Number : ".$nid."<br>";
    }


    //Maritial Status
    if(empty($_POST["maritialstatus"]))
    {
        echo "<b>Maritial Status must be selected</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Maritial status : ".$_POST["maritialstatus"]."<br>";
    }


    //Phone number
    if(empty($phnnum))
    {
        echo "<b>Phone number should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Phone Number: ".$phnnum."<br>";
    }


    //Degisnation
    if(empty($_POST["designation"]))
    {
        echo "<b>Designation must be selected</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Designation : ".$_POST["designation"]."<br>";
    }


    //Joining Date
    if(empty($joindate))
    {
        echo "<b>Joining Date should not be empty</b>"."<br>";
        $error = 1;
    }
    else
    {
        echo "Joining date : ".$joindate."<br>";
    }
    
    //File
    $target_dir = "../uploads/";
    $target_file = $target_dir.basename($_FILES["fileToUpload"]["name"]);

    if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) 
    {
        echo "File : ".basename( $_FILES["fileToUpload"]["name"]);
        $file=basename( $_FILES["fileToUpload"]["name"]);
    } 
    else 
    {
        echo "<b>Error file uploading</b>";
        $error = 1;
    }


    //Database conn
    if($error == 0 )
    {
        $mydb= new db();
        $conobj= $mydb->openCon();
        $results = $mydb->insertUser("employee",$fname, $lname,$uname,$pass,$email,$_POST["gender"],$pre,$per,$birthdate,$_POST["religion"],$_POST["bloodgroup"],
        $national,$nid,$_POST["maritialstatus"],$phnnum,$_POST["designation"],$joindate,$file,$conobj);
    }
    else
    {
        echo "<br><h3>Registration Failed!!!</h3>";
    }
}
?>