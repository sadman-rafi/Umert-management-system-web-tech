<?php include('../controller/cashiercontroller.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" type="text/css" href="../css/schStyle.css">
	<title>Contact to Admin</title>
</head>
<body>
  <p align="right">
 
  <a href="logout.php" style="color: #fff; padding: 10px 28px; background: red; text-decoration: none; font-weight: bold;" href="">Logout</a>
</p>
	<center>
  <h3 style="background-color:yellowS;">Contact Plase</h3>
  <form id="confrom" method="post">
      <table>
        <tr>
          <td>Username:</td>
          <td><input type="text" name="user" placeholder="Enter name Here" ></td>
        </tr>
        <tr>
          <td>Email:</td>
          <td><input type="text" name="email" value=""  placeholder="name@gmail.com" ></td>
        </tr>
        <tr>
        	<textarea name="comment" form="confrom">Enter text here...</textarea>
        </tr>
        <tr>
           <td><button name="submit">Submit</button></td>
           
        </tr>
      </table>
  </form>



  <?php include('../controller/contractcontroller.php'); ?>



  
  </center>

</body>
</html>