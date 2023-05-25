<?php
include("../model/admindb.php");

if(isset($_POST["showall"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->showAll("employee",$conobj);
if($results->num_rows > 0)
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<table bgcolor=black>";
        echo"<tr bgcolor=white>";
        echo"<th>"."First Name "."<th>";
        echo"<th>"."Last Name "."<th>";
        echo"<th>"."User Name :"."<th>";
        echo"<th>"."Password : "."<th>";
        echo"<th>"."Email : "."<th>";
        echo"<th>"."Gender : "."<th>";
        echo"<th>"."Present Address : "."<th>";
        echo"<th>"."Premanent Address : "."<th>";
        echo"<th>"."Date of Birth : "."<th>";
        echo"<th>"."Religion : "."<th>";
        echo"<th>"."Blood Group : "."<th>";
        echo"<th>"."Nationality : "."<th>";
        echo"<th>"."NID Number : "."<th>";
		echo"<th>"."Maritial Status : "."<th>";
		echo"<th>"."Phone Number : "."<th>";
		echo"<th>"."Designation : "."<th>";
		echo"<th>"."Joining Date : "."<th>";
		echo"<th>"."File : "."<th>";
        echo"<tr>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr  bgcolor=white>";
            echo"<td>".$myrow["firstname"]."<td>";
            echo"<td>".$myrow["lastname"]."<td>";
            echo"<td>".$myrow["username"]."<td>";
            echo"<td>".$myrow["pass"]."<td>";
            echo"<td>".$myrow["email"]."<td>";
            echo"<td>".$myrow["gender"]."<td>";
            echo"<td>".$myrow["preaddress"]."<td>";
            echo"<td>".$myrow["peraddress"]."<td>";
            echo"<td>".$myrow["date"]."<td>";
            echo"<td>".$myrow["religion"]."<td>";
            echo"<td>".$myrow["bloodgroup"]."<td>";
            echo"<td>".$myrow["nationality"]."<td>";
            echo"<td>".$myrow["nidnumber"]."<td>";
			echo"<td>".$myrow["maritialstatus"]."<td>";
			echo"<td>".$myrow["number"]."<td>";
			echo"<td>".$myrow["designation"]."<td>";
			echo"<td>".$myrow["date2"]."<td>";
			echo"<td>".$myrow["file"]."<td>";
            echo"<tr>";
        }
        echo "</table>";    
    }
else
    {
           echo "No data found";
    }

}

if(isset($_POST["search"]))
{
$mydb=new db();
$conobj=$mydb->openCon();
$results=$mydb->searchUserByDesignation("employee",$_POST["searchdata"],$conobj);
if($results->num_rows > 0)
    {
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";
        echo "<br>";

        echo "<table bgcolor=black>";
        echo"<tr bgcolor=white>";
        echo"<th>"."First Name "."<th>";
        echo"<th>"."Last Name "."<th>";
        echo"<th>"."User Name :"."<th>";
        echo"<th>"."Password : "."<th>";
        echo"<th>"."Email : "."<th>";
        echo"<th>"."Gender : "."<th>";
        echo"<th>"."Present Address : "."<th>";
        echo"<th>"."Premanent Address : "."<th>";
        echo"<th>"."Date of Birth : "."<th>";
        echo"<th>"."Religion : "."<th>";
        echo"<th>"."Blood Group : "."<th>";
        echo"<th>"."Nationality : "."<th>";
        echo"<th>"."NID Number : "."<th>";
		echo"<th>"."Maritial Status : "."<th>";
		echo"<th>"."Phone Number : "."<th>";
		echo"<th>"."Designation : "."<th>";
		echo"<th>"."Joining Date : "."<th>";
		echo"<th>"."File : "."<th>";
        echo"<tr>";
        while($myrow=$results->fetch_assoc())
        {    
            echo"<tr  bgcolor=white>";
            echo"<td>".$myrow["firstname"]."<td>";
            echo"<td>".$myrow["lastname"]."<td>";
            echo"<td>".$myrow["username"]."<td>";
            echo"<td>".$myrow["pass"]."<td>";
            echo"<td>".$myrow["email"]."<td>";
            echo"<td>".$myrow["gender"]."<td>";
            echo"<td>".$myrow["preaddress"]."<td>";
            echo"<td>".$myrow["peraddress"]."<td>";
            echo"<td>".$myrow["date"]."<td>";
            echo"<td>".$myrow["religion"]."<td>";
            echo"<td>".$myrow["bloodgroup"]."<td>";
            echo"<td>".$myrow["nationality"]."<td>";
            echo"<td>".$myrow["nidnumber"]."<td>";
			echo"<td>".$myrow["maritialstatus"]."<td>";
			echo"<td>".$myrow["number"]."<td>";
			echo"<td>".$myrow["designation"]."<td>";
			echo"<td>".$myrow["date2"]."<td>";
			echo"<td>".$myrow["file"]."<td>";
            echo"<tr>";
        }
        echo "</table>";    
    }
else
    {
           echo "No data found";
    }
}


if(isset($_POST["delete"]))
{
    if(empty($_POST["username"]))
    {
        echo "Username Cannot be Empty";
    }

    else
    {
        $mydb=new db();
        $conobj=$mydb->openCon();
        $results=$mydb->deleteEmp("employee",$_POST["username"],$conobj);
        if($results === TRUE)
        {
            header("Location:../view/showemp.php");
        }
        else
        {
            echo "Cannot Deleted".$conobj->error;
        }
    }  
}
?>