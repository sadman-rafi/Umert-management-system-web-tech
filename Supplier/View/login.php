<?php require "../Control/logincheck.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<Body>
	<font align="center"  size="5" face="Verdana">

<div class="card">
<h2>Login form </h2>
<hr>
<div class="card2">
<image src="../public/images/bbbl.jpeg">
</div>      
<form action="" method="POST">
 <table border="0" width="500" align="center" cellspacing="5" cellpadding="10" >
    <tr height="10px">
 <td>
 	<font align="center" size="5" face="Verdana"><label for="sid" >Supplier Id:</label> <input type="text" name="sid" placeholder="Supplier Id"><br>
  <?php 
  echo $idErr;
  ?></font>
<br></td></tr>

 <tr height="10px"><td><font align="center" size="5" face="Verdana"> <label for="pass">password:</label>&nbsp;&nbsp;&nbsp;<input type="password"  name="pass" placeholder="Password"><br>
    <?php 
  echo $passErr; ?></font><br></td>
  </tr>

<tr height="10px">
	<td><font align="center" size="5" face="Verdana">&nbsp;&nbsp;&nbsp;<input type="submit" name="Login" class="button submitbutton">&nbsp;&nbsp;&nbsp;<input type="Reset" value="Reset" class="button resetbutton"><br><?php 
  echo $loginErr; ?></font><br></td>
</tr>
<tr height="10px">
  <td><font align="center" size="5" face="Verdana"><a href="../View/SupplierRegistration.php">Want to register?</a>  
             <br>  <br>
           </font></td>
</tr>
</table>
</form>
</div>

</Body>
</html>