<?php
include ("../control/addproductprocess.php")
?>


<html>
    <head>
        <title>
            Add Product
        </title>
        <link rel="stylesheet" href="../css/employeecss.css">
    </head>
    <body>
        

<form
    action="" method="POST" class="box" > 
    <h2>Add Product</h2>
     <input type="text" name="productname" placeholder="Product Name">
    <input type="number" name="aop" placeholder="Amount of Product">
    <input type="number" name="price" placeholder="Product Price"></td>
    <input type="submit" name="Submisson" value="Add">          
    <div class=link> ><a href="empolyeeprofile.php">Go Back to Profile</a> </div>
</form>
</body>
</html>