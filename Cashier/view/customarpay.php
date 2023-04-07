<?php include('../controller/cashiercontroller.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/loginstyle.css">
	<title>PAY customer</title>
</head>
<body>
  <p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
  <h3 style="background-color:Tomato">PAY Customer</h3>
  <form action="" method="post">
      <table>
        <tr>
          <td>Customer ID:</td>
          <td><input type="text" name="id" placeholder="Enter id Here" required></td>
        </tr>
        <tr>
          <td>AMOUNT:</td>
          <td><input type="number" name="taka" placeholder="Enter Amount Here"requiredS> tk</td>
        </tr>
        
        <tr>
          <td><button name="submit">Submit</button></td>
           
        </tr>
      </table>
  </form>

  <?php include('../controller/customarpaycontroller.php'); ?>


 
  
  </center>

</body>
</html>