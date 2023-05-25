<?php
include("../control/adminprofileprocess.php");
include("../control/admincookies.php");

?>
<html>
<head>
    <link rel="stylesheet" href="../css/adminprofilecss.css">
    <title>Admin Profile
</title>
<body>
    <div class="boxprofile">
<form action="" method="POST">
    <center>
    <br>
    <br>
    <br>
    <br>
    <div class="admin">
    Hi <?php echo  $uname;?>,</div> <div class="linkprofile"> <a href="../control/adminlogout.php">Logout</a> </div>

</center>

    <div class="linkprofile">
    <a href="../view/adminchangepass.php">Change Password</a>
    </div>
    <br>

    <div class="linkprofile">
    <a href="../view/adminempregistration.php">Add new Employee</a>
    </div>
    <br>
    
    <div class="linkprofile">
    <a href="../view/showemp.php">Employee’s profile View-Search-Update-Delete</a>
    </div>
    <br>
    
    <div class="linkprofile">
    <a href="../view/admincusregistration.php">Add new Customer</a>
    </div>
    <br>
    
    <div class="linkprofile">
    <a href="../view/admincusupdateprofile.php">Customer’s profile Update</a>
    </div>
    <br>
    
    <div class="linkprofile">
    <a href="../view/admincusviewdelete.php">Customer’s profile view-delete</a>
    </div>
    <br>

    <div class="linkprofile">
    <a href="../view/admincheckorderhistory.php">View order history</a>
    </div>
    <br>

    <div class="linkprofile">
    <a href="../view/admincheckpaymenthistory.php">View payment history</a> 
    </div>
    <br>

    <div class="linkprofile">
    <a href="../view/showemptarget.php">View employee target</a>
    </div>
    <br>

    <div class="linkprofile">
    <a href="../view/adminshowcuscom.php">Check customer complain history</a> 
    </div>
    <br>
    <div class="linkprofile">
    <a href="../view/checkproductavi.php">Check product availability</a> 
    </div>	
    
</form>
</div>
    <div class="sticky">
        Admin Profile
    </div>
</div>
</body>
</html>
