<?php include('../controller/cashiercontroller.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Stocks REport </title>
  <link rel="stylesheet" href="../css/loginstyle.css">
</head>
<body>
  <p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
  <h3 style="background-color:Tomato">Stock REport</h3>
  <form name="Stock" method="post" onsubmit="return validateform()">
      <table>
        <tr>
          <td>Product name:</td>
          <td><input type="text" id="proname" name="proname" placeholder="Enter name Here" ></td>
        </tr>
        <tr>
        	<td>CATAGORY:</td>
          <td><input type="text" id="CATAGORY" name="CATAGORY" placeholder="CATAGORY plz" ></td>
          
        </tr>
        <tr>
        	<td>Quantity:</td>
          <td><input type="text" name="Quantity" id="Quantity" placeholder="Enter Quantity Here" ></td>
          
        </tr>
        <tr>
        	<td>price:</td>
          <td><input type="text" name="price" id="price" placeholder="Enter price Here" ></td>
          
        </tr>
        <tr>
        	<td>PRODUCT ID :</td>
          <td><input type="text" name="PRODUCT" id="PRODUCT" placeholder="Enter PRODUCT Here" ></td>
          
        </tr>
        

        
        <tr>
           <td><button name="submit"> Submit </button></td>
           
        </tr>
      </table>
  </form>

  <?php include('../controller/stockrecoredcontroller.php'); ?>


   


  
  </center>
<script src="../js/stockjs.js"></script>
</body>
</html>