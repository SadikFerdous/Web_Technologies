
<html>
    <link rel="stylesheet" href="../css/adminshowcss.css">
    <body>
    
    <div class="box">
    <form action="" method="POST">  

            <input type="submit" name="showall" class="button submit" value="Showall"> 
            
            <input type="text" name="searchdata" placeholder="Search By Degisnation""> 
            <input type="submit" name="search"  class="button submit" value="Search">
            
            <input type="text" name="username" placeholder="Delete By User Name""> 
            <input type="submit" name="delete"  class="button submit" value="Delete">
            
            <center>
            <div class="link">
            <a href="../view/adminupdateempprofile.php">Click Here for Employee's Profile Update!</a>
            </div>
            <br>

            <div class="link">
            <a href="../view/adminprofile.php">Click Here for Profile Page!</a> <td></td>
            </div>
            </center>
            <br>
            <br>
            <br>
            <br>  
            
            
    </form>
    </div>
    <div class="sticky">
        Employee View Search Delete
    </div>
    <form>
        <?php
            include("../control/showempprocess.php")
        ?>
    <form>
</body>
</html>

