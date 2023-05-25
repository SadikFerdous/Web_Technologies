
<html>
    <link rel="stylesheet" href="../css/adminshowcuscss.css">
<body>
<div class="box">
<form action="" method="POST">
            <input type="submit" name="showall" class="button submit" value="Showall"> </td>
  
            <input type="text" name="searchdata" placeholder="Search By Email"> 
            <input type="submit" name="search" class="button submit" value="Search"> <td></td>
  
            <input type="text" name="fname" placeholder="Delete By Name"> 
            <input type="submit" name="delete" class="button submit" value="Delete"> <td></td>
 
            <center>
            <div class="link">
            <a href="../view/adminprofile.php">Click Here for Profile Page!</a> 
            </div>
</center>
</form>
</div>
<div class="sticky">
Customer View Search Delete
    </div>

    <form>
    <?php
        include("../control/admincusviewdeleteprocess.php")
    ?>
    <form>
</body>
</html>