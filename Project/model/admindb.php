<?php
class db
{
    function openCon()
    {
        $dbservername = "localhost"; 
        $dbusername = "root"; 
        $dbpassword = ""; 
        $dbname="isp";
        $conn= new mysqli($dbservername,$dbusername,$dbpassword,$dbname);
        
        if($conn->connect_error)
        {
            echo "Cant create con obj";
        }
        return $conn;
    }

    function checkLogin($tablename,$username,$pass,$conn )
    {
        $sqlstr="SELECT username,pass FROM $tablename WHERE username='$username' AND pass='$pass'";
        return $conn->query($sqlstr);
    }

    function insertUser($tablename,$firstname,$lastname,$username,$pass,$email,$gender,$preaddress,$peraddress,$date,$religion,$bloodgroup,$nationality,$nidnumber,$maritialstatus,$number,$designation,$date2,$file,$conn)
    {
        $sqlstr="INSERT INTO $tablename (firstname,lastname,username,pass,email,gender,preaddress,peraddress,date,religion,bloodgroup,nationality,nidnumber,maritialstatus,number,designation,date2,file) VALUES 
        ('$firstname','$lastname','$username','$pass','$email','$gender','$preaddress','$peraddress','$date','$religion','$bloodgroup','$nationality','$nidnumber','$maritialstatus','$number','$designation','$date2','$file')";
        return $conn->query($sqlstr);
    }
    
    function showAll( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }
    
    function searchUserByDesignation($tablename,$designation,$conn)
    {
       $sqlstr="SELECT * FROM $tablename WHERE designation='$designation'";
       return $conn->query($sqlstr);
    }

    function checkpassword($tablename,$pass,$conn )
    {
        $sqlstr="SELECT pass FROM $tablename WHERE pass='$pass'";
        return $conn->query($sqlstr);
    }
    
    function updateUser($tablename,$username,$pass,$conn)
    {
        $sqlstr="UPDATE $tablename SET pass='$pass' WHERE username='$username' ";
        return $conn->query($sqlstr);
    }

    function deleteEmp($tablename,$username,$conn)
    {
        $sqlstr="DELETE from $tablename WHERE username='$username'";
        return $conn->query($sqlstr);
    }

    function searchEmpByName($tablename,$username,$conn)
    {
       $sqlstr="SELECT * FROM $tablename WHERE username='$username'";
       return $conn->query($sqlstr);
    }

    function updateEmp($tablename,$firstname,$lastname,$username,$pass,$email,$gender,$preaddress,
    $peraddress,$date,$religion,$bloodgroup,$nationality,$nidnumber,$maritialstatus,$number,$designation,$date2,$file,$conn)
    {
        $sqlstr="UPDATE $tablename SET firstname='$firstname',lastname='$lastname',pass='$pass',email='$email',gender ='$gender',
        preaddress='$preaddress',peraddress='$peraddress',date='$date',religion='$religion',bloodgroup='$bloodgroup',nationality='$nationality',
        nidnumber='$nidnumber',maritialstatus='$maritialstatus',number='$number',designation='$designation', date2='$date2',file='$file' WHERE username='$username'";
        return $conn->query($sqlstr);
    }

    function updateEmpNoFile($tablename,$firstname,$lastname,$username,$pass,$email,$gender,$preaddress,
    $peraddress,$date,$religion,$bloodgroup,$nationality,$nidnumber,$maritialstatus,$number,$designation,$date2,$conn)
    {
        $sqlstr="UPDATE $tablename SET firstname='$firstname',lastname='$lastname',pass='$pass',email='$email',gender ='$gender',
        preaddress='$preaddress',peraddress='$peraddress',date='$date',religion='$religion',bloodgroup='$bloodgroup',nationality='$nationality',
        nidnumber='$nidnumber',maritialstatus='$maritialstatus',number='$number',designation='$designation', date2='$date2' WHERE username='$username'";
        return $conn->query($sqlstr);
    }

    function showemptarget( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

    function productavi($tablename,$conn)
    {
        $sqlstr="SELECT productname,aop FROM $tablename";
        return $conn->query($sqlstr);
    }

    function insertCustomer($tablename,$fname,$gender,$mail,$adres,$pass,$conn)
    {
        $sqlstr="INSERT INTO $tablename (fname,gender,mail,adres,pass) VALUES ('$fname','$gender','$mail','$adres','$pass')";
        return $conn->query($sqlstr);
    }

    function searchCusByEmail($tablename,$mail,$conn)
    {
       $sqlstr="SELECT * FROM $tablename WHERE mail='$mail'";
       return $conn->query($sqlstr);
    }

    function updateCus($tablename,$fname,$gender,$mail,$adres,$pass,$conn)
    {
        $sqlstr="UPDATE $tablename SET fname='$fname',gender ='$gender',adres='$adres',pass='$pass' WHERE mail='$mail'";
        return $conn->query($sqlstr);
    }


    function showAllCus( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

    function deleteCus($tablename,$fname,$conn)
    {
        $sqlstr="DELETE from $tablename WHERE fname='$fname'";
        return $conn->query($sqlstr);
    }

    function searchEmpByEmail($tablename,$mail,$conn)
    {
       $sqlstr="SELECT * FROM $tablename WHERE mail='$mail'";
       return $conn->query($sqlstr);
    }

    function showCusCom( $tablename,$conn)
    {
        $sqlstr="SELECT * FROM $tablename";
        return $conn->query($sqlstr);
    }

    function showOder( $tablename,$conn)
    {
        $sqlstr="SELECT email,productname,productquantity FROM $tablename";
        return $conn->query($sqlstr);
    }

    function showPayment( $tablename,$conn)
    {
        $sqlstr="SELECT email,payment FROM $tablename";
        return $conn->query($sqlstr);
    }

    function checkForgetPassword($tablename,$username,$email,$conn )
    {
        $sqlstr="SELECT username,email FROM $tablename WHERE username='$username' AND email='$email'";
        return $conn->query($sqlstr);
    }

    function updateNewPass($tablename,$username,$pass,$conn)
    {
        $sqlstr="UPDATE $tablename SET pass='$pass' WHERE username='$username' ";
        return $conn->query($sqlstr);
    }

    function searchProduct($tablename,$productname,$conn)
    {
       $sqlstr="SELECT * FROM $tablename WHERE productname='$productname'";
       return $conn->query($sqlstr);
    }

    function connClose()
    {
        $conn->close();
    }
}
?>
