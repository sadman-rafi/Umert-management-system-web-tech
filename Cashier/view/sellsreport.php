<?php include('../controller/cashiercontroller.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/loginstyle.css">
	<title>Sells REport </title>
</head>
<body>
  <p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
    <form name="sellsfrom" method="post"onsubmit="return validateform()">
      <table>
         <tr>
          <td> Username:</td>
          <td><input type="text" name="name" placeholder="Enter name Here" ></td>
        </tr>
        <tr>
          <td>CATAGORY:</td>
          <td><input type="text" name="CATAGORY" placeholder="CATAGORY plz" ></td>
          
        </tr>
        <tr>
          <td>Quantity:</td>
          <td><input type="text" name="Quantity" placeholder="Enter Quantity Here" ></td>
          
        </tr>
        <tr>
          <td>price:</td>
          <td><input type="text" name="price" placeholder="Enter price Here" ></td>
          
        </tr>
        <tr>
          <td>PRODUCT ID :</td>
          <td><input type="text" name="PRODUCT" placeholder="Enter PRODUCT Here" ></td>
          
        </tr>
        <tr>
          <td>suplier ID :</td>
          <td><input type="text" name="sid" placeholder="Enter Supplier Here" ></td>
          
        </tr>

        
        <tr>
           <td><button name="submit"> Submit </button></td>
           
        </tr>
  </form>
      
  

  <?php include('../controller/sellrecordecontroller.php'); ?>
 
  </center>

<script src="../js/sellsjs.js"></script>
</body>
</html>