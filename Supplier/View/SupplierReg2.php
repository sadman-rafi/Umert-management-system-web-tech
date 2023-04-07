<?php require "../Control/SupplierRegCheck2.php" ?>
<!DOCTYPE html>
<html lang="en-US">
<head>
<link rel="stylesheet" type="text/css" href="../public/css/Supplierlogin.css">
</head>
<Body >
<div class="reg-card">
	<h3>Registration Information </h3><hr>
 
<form action="" method="post">
Supplier Id:<input name="sid" value="<?php echo $sid; ?>"><br><br>
 first name<input name="fname" value="<?php echo $fname; ?>"><br><br>
 last name<input name="lname" value="<?php echo $lname; ?>"><br><br>
 age:<input name="age" value="<?php echo $age; ?>"><br><br>
 gender:<input name="gen" value="<?php echo $gen; ?>"><br><br>
 contact No<input name="contNo" value="<?php echo $contNo; ?>"><br><br>
 email<input name="email" value="<?php echo $email; ?>"><br><br>
 password<input name="pass" value="<?php echo $pass; ?>"><br><br>
</form>
 <a href="SupplierDashboard.php">Home</a>&nbsp;&nbsp;&nbsp;<a href="login.php">login</a>
</div>
</Body>
</html>