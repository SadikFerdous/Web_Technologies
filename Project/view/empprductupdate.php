<?php
include ("../control/empprductupdateprocess.php")
?>


<html>
    <head>
    <link rel="stylesheet" href="../css/empproductupdate.css">
        <title>
            Update Product
        </title>
    </head>
    <body>
    <div class="cus"><h2>Update Product</h2></div>

<center>
<form
    action="" method="POST" class="box" onsubmit="return myAjax()" > 
    <p>Product Name : </p> <input type="text" name="productname"  placeholder="Search by product name" id="inputtext" onkeyup="myAjax()">
    <input type="text" name="pid"  id="pid" >
    <p id="pp" ></p>
    <input type="submit" name="search" value="Search"></p>
    <br><hr>
    <p>Product Name : </p><input type="text" name="productname" value="<?php global $productname; echo $productname;?>" readonly>
    <p>Number of Product available :</p><input type="number" name="aop" value="<?php global $aop; echo $aop;?>">
    <p>Price : </p><input type="number" name="price" value="<?php global $price; echo $price;?>">
    <input type="submit" name="update" value="update">
    <input type="reset" name="Submission" value="Reset">         
    <div class=link><a href="empolyeeprofile.php">Go Back to Profile</a> </div> <br> 

</form>
<script src="../js/empajax.js"></script>
</center>
</body>
</html>